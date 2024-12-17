<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $menus = [
            ['title' => 'Slider', 'url' => route('slider.index')],
        ];
    
        return view('backend_slider.index', compact('menus'));
    }

    public function create()
    {
        return view('backend_slider.create');
    }

    public function insert(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_slider' => 'required'
        ]);

        // $today = Carbon::now()->format('d-m-Y');
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = time() . '-' . $image->getClientOriginalName(); // Nama file unik
            $path = $image->storeAs('public/images', $image_name); // Simpan file di Storage
    
            $input['image'] = str_replace('public/', '', $path); // Simpan path di database
        }

       $id_insert =  DB::table('slider')->insertGetId([
            'slider_title' => $input['title'],
            'slider_description' => $input['description'],
            'slider_image' => $input['image'],
            'slider_status' => $input['status_slider'],
            'slider_created_by' => auth()->id(),
            'slider_created_at' => now(),
        ]);

        if ($input['status_slider'] == 1){
            DB::table('slider')->whereNot('id', $id_insert)
                ->update(['slider_status' => 0]);
        }

        return response()->json(['type' => 'success', 'messages' => 'Berhasil menambahkan data']);

    }

    public function show(Request $request)
    {
        $sliders = DB::table('slider')->get();

        $no = 1;
        $data = array();
        foreach ($sliders as $valSlider) {
            $imageUrl = asset('storage/' . $valSlider->slider_image);
            $status = $valSlider->slider_status;
            $row = array();
            $row[] = $no;
            $row[] = $valSlider->slider_title;
            $row[] = $valSlider->slider_description;
            $row[] ='<img src="' . $imageUrl . '" alt="Slider Image" style="width: 100px; height: auto;">';
            $row[] = ($status == 1 ? 'Aktif' : 'Non Aktif');
            $row[] = '<a id="button_edit" class="btn btn-sm btn-warning" value="' . $valSlider->id . '" title="Edit Data"><i class="fas fa-sharp fa-solid fa-file"></i></a> <a id="button_delete" class="btn btn-sm btn-danger" value="' . $valSlider->id . '" title="Hapus Data"><i class="fas fa-solid fa-trash"></i></a>';
            $data[] = $row;

            $no++;
        }

        $output = array("data" => $data);
        return response()->json($output);
    }

    public function show_detail($id)
    {
        $sliders = DB::table('slider')->where('id', $id)->get();

        return response()->json($sliders);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = array(
            'slider_title' => $request->title,
            'slider_description' => $request->deskripsi,
            'slider_status' => $request->status,
            'slider_updated_by' => auth()->id(),
            'slider_updated_at' => now(),
        );
        DB::table('slider')->where('id', $id)
            ->update($data);

        DB::table('slider')->whereNot('id', $id)
            ->update(['slider_status' => 0]);


        return response()->json(['success' => 'Slider berhasil di edit']);
    }

    public function delete(Request $request, $id)
    {
        // Ambil slider yang sesuai dengan id
        $slider = DB::table('slider')->where('id', $id);
        $slider_cek = $slider->first(); // Ambil data pertama
    
        if ($slider_cek) {
            // Ambil path relatif dari gambar
            $imagePath = 'public/' . $slider_cek->slider_image;
    
            // Hapus gambar dari storage
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
    
            // Hapus data slider
            $slider->delete();
    
            return response()->json(['success' => 'Slider deleted successfully']);
        }
    
        return response()->json(['error' => 'Slider not found'], 404);
    }

}
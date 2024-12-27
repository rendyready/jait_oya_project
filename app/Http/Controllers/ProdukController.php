<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $menus = [
            ['title' => 'Slider', 'url' => route('produk.index')],
        ];
    
        return view('backend.produk', compact('menus'));
    }

    public function insert(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_produk' => 'required'
        ]);

        // $today = Carbon::now()->format('d-m-Y');
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = time() . '-' . $image->getClientOriginalName(); // Nama file unik
            $path = $image->storeAs('public/produk', $image_name); // Simpan file di Storage
    
            $input['image'] = str_replace('public/', '', $path); // Simpan path di database
        }

      $id_insert = DB::table('produk')->insertGetId([
            'produk_title' => $input['title'],
            'produk_description' => $input['description'],
            'produk_image' => $input['image'],
            'produk_status' => $input['status_produk'],
            'produk_information' => $input['produk_info'],
            'produk_created_by' => auth()->id(),
            'produk_created_at' => now(),
        ]);

        if ($input['produk_info'] == 1){
            DB::table('produk')->whereNot('id', $id_insert)
                ->update(['produk_information' => 0]);
        }

        return response()->json(['type' => 'success', 'messages' => 'Berhasil menambahkan data']);

    }

    public function show(Request $request)
    {
        $produks = DB::table('produk')
            ->selectRaw("
                produk_title,
                produk_description,
                produk_image,
                CASE WHEN produk_status = 3 THEN 'Vermak' ELSE 'no' END as vermak,
                CASE WHEN produk_status = 2 THEN 'Jahit' ELSE 'no' END as jahit,
                produk_information,
                id
            ")
            ->get();

        $no = 1;
        $data = array();
        foreach ($produks as $valProduk) {
            $imageUrl = asset('storage/' . $valProduk->produk_image);
            $kat_vermak = $valProduk->vermak;
            $kat_jahit = $valProduk->jahit;
            $banner = $valProduk->produk_information;
            $row = array();
            $row[] = $no;
            $row[] = $valProduk->produk_title;
            $row[] = $valProduk->produk_description;
            $row[] ='<img src="' . $imageUrl . '" alt="Slider Image" style="width: 100px; height: auto;">';
            $row[] = $kat_vermak == 'no' ? $kat_jahit : $kat_vermak;
            $row[] = ($banner == 1 ? 'Ya' : 'Tidak');
            $row[] = '<a id="button_edit" class="btn btn-sm btn-warning" value="' . $valProduk->id . '" title="Edit Data"><i class="fas fa-sharp fa-solid fa-file"></i></a> <a id="button_delete" class="btn btn-sm btn-danger" value="' . $valProduk->id . '" title="Hapus Data"><i class="fas fa-solid fa-trash"></i></a>';
            $data[] = $row;

            $no++;
        }

        $output = array("data" => $data);
        return response()->json($output);
    }

    public function show_detail($id)
    {
        $produks = DB::table('produk')->where('id', $id)->get();

        return response()->json($produks);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = array(
            'produk_title' => $request->title,
            'produk_description' => $request->deskripsi,
            'produk_status' => $request->status,
            'produk_information' => $request->banner,
            'produk_updated_by' => auth()->id(),
            'produk_updated_at' => now(),
        );
        DB::table('produk')->where('id', $id)
            ->update($data);

        DB::table('produk')->whereNot('id', $id)
            ->update(['produk_information' => 0]);

        return response()->json(['success' => 'Slider berhasil di edit']);
    }

    public function delete(Request $request, $id)
    {
        // Ambil produk yang sesuai dengan id
        $produk = DB::table('produk')->where('id', $id);
        $produk_cek = $produk->first(); // Ambil data pertama
    
        if ($produk_cek) {
            // Ambil path relatif dari gambar
            $imagePath = 'public/' . $produk_cek->produk_image;
    
            // Hapus gambar dari storage
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
    
            // Hapus data produk
            $produk->delete();
    
            return response()->json(['success' => 'Slider deleted successfully']);
        }
    
        return response()->json(['error' => 'Slider not found'], 404);
    }
}
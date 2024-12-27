<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = new \stdClass();
        $data->menus = [
            ['title' => 'Home', 'url' => route('frontend.index')],
        ];

        $data->background = DB::table('slider')->where('slider_status', 1)->first();
    
        return view('frontend/index', compact('data'));
    }

    public function about()
    {
        $data = new \stdClass();
        $data->menus = [
            ['title' => 'Tentang', 'url' => route('frontend.about')],
        ];
        // $data->about = DB::table('produk')->where('produk_information', 1)->where('produk_status', 1)->first();

        return view('frontend/about', compact('data'));
    }

    public function contact()
    {
        $menus = [
            ['title' => 'Contact', 'url' => route('frontend.contact')],
        ];
    
        return view('frontend/contact', compact('menus'));
    }

    public function layanan()
    {
        $data = new \stdClass();
        $data->menus = [
            ['title' => 'Produk', 'url' => route('frontend.layanan')],
        ];

        $data->banner = DB::table('produk')->where('produk_information', 1)->where('produk_status', 1)->first();
        $data->jahit = DB::table('produk')->where('produk_status', 2)->get();
        $data->vermak = DB::table('produk')->where('produk_status', 3)->get();
    
        return view('frontend/layanan', compact('data'));
    }

}
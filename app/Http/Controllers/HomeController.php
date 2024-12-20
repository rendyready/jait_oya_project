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
        $menus = [
            ['title' => 'Tentang', 'url' => route('frontend.about')],
        ];
    
        return view('frontend/about', compact('menus'));
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

        $data->banner = DB::table('produk')->where('produk_information', 1)->first();
    
        return view('frontend/layanan', compact('data'));
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menus = [
            ['title' => 'Home', 'url' => route('frontend.index')],
        ];
    
        return view('frontend/index', compact('menus'));
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

    public function produk()
    {
        $menus = [
            ['title' => 'Produk', 'url' => route('frontend.produk')],
        ];
    
        return view('frontend/produk', compact('menus'));
    }
}
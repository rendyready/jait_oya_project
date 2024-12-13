<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('slider.index');
    }

    public function create()
    {
        return view('slider.create');
    }

    public function edit()
    {
        return view('slider.edit');
    }
}

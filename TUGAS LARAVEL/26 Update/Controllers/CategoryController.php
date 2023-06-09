<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = [
        //     [
        //         "id" => "8e1a6be-c042-4efd-a199-7d45b99fdcc2",
        //         "name" => "cellphone"
        //     ],
        //     [
        //         "id" => "243d6c9e-4a86-485c-bde6-2a83c2b306be",
        //         "name" => "tablet"
        //     ],
        //     [
        //         "id" => "2ec09c46-99b1-4cf5-a1cb-243c4d6ffc9e",
        //         "name" => "wearable"
        //     ],
        //     [
        //         "id" => "1d17a400-d1e4-4fa1-926a-2ecfdc3266d4",
        //         "name" => "laptop"
        //     ],
        //     [
        //         "id" => "b99448e1-8e60-48a3-b379-1d1e6973c400",
        //         "name" => "accessories"
        //     ]
        // ];

        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view ('category.create');
    }


    public function store(Request $request)
    {
        //Validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        //masukkan data ke database
        $category = Category::create([
            'name' => $request->name
        ]);

        //kembali ke halaman index sesudah masukkan data
        return redirect()->route('category.index');
    }
}

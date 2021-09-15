<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            "title" => "Home",
            "url" => product::all()
        ]);
    }

    public function show($slug)
    {
        return view('product', [
            "title" => "Produk",
            "product" => product::find($slug)
        ]);
    }

}

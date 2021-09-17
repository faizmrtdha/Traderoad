<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\prod;
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
            "url" => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "title" => "Produk",
            "product" => $product
        ]);
    }

}

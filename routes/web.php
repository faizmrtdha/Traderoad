<?php

use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
$blog_posts = [
    [
        "title" => "Judul A",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, minus. Illum consequatur repudiandae ipsum ipsam nostrum quo at fugiat, vero ad id soluta. Et, ea laboriosam aliquid ut suscipit deleniti reprehenderit quaerat eligendi laborum saepe officia officiis atque doloribus tempore magnam quia fugiat ipsam eaque molestiae. Explicabo nisi, et quasi voluptatem laborum tempore non, unde ipsam asperiores facilis recusandae aut provident sed quis, numquam iusto deleniti sunt esse quas nobis distinctio laboriosam! Porro consequuntur voluptatem optio et placeat nesciunt, laboriosam eius quidem vel minima enim est! Asperiores odit, iure id sapiente quaerat minus veniam esse nesciunt, officiis aliquid aspernatur officia."
    ],
    [
        "title" => "Judul B",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, minus. Illum consequatur repudiandae
        ipsum ipsam nostrum quo at fugiat, vero ad id soluta. Et, ea laboriosam aliquid ut suscipit deleniti
        reprehenderit quaerat eligendi laborum saepe officia officiis atque doloribus tempore magnam quia fugiat ipsam
        eaque molestiae. Explicabo nisi, et quasi voluptatem laborum tempore non, unde ipsam asperiores facilis
        recusandae aut provident sed quis, numquam iusto deleniti sunt esse quas nobis distinctio laboriosam! Porro
        consequuntur voluptatem optio et placeat nesciunt, laboriosam eius quidem vel minima enim est! Asperiores odit,
        iure id sapiente quaerat minus veniam esse nesciunt, officiis aliquid aspernatur officia."
    ]
    ];
    return view('index', [
        // "posts" => product::all()
    ]);
});

// Route::get('/product', [ProductController::class, 'index']);
// Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{slug}', function ($slug) {
    return view('product');
});
Route::get('/product', function () {
    return view('product',[
        "title"=> "produk",
        "judul" => product::all()
        // "judul" => product::find()
    ]);
});

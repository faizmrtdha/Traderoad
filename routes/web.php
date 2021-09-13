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

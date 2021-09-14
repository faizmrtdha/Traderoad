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
        "title" => "Home"
    ]);
});
Route::get('product/coconut-shell-charcoal', function () {
    return view('product-1', [
        "title" => "Product"
    ]);
});
Route::get('product/coconut-fiber', function () {
    return view('product-2', [
        "title" => "Product"
    ]);
});
Route::get('product/coconut-shell-charcoal-briquettes', function () {
    return view('product-3', [
        "title" => "Product"
    ]);
});
Route::get('product/cocopeat', function () {
    return view('product-4', [
        "title" => "Product"
    ]);
});
Route::get('product/crude-coconut-oil', function () {
    return view('product-5', [
        "title" => "Product"
    ]);
});
Route::get('product/virgin-coconut-oil', function () {
    return view('product-6', [
        "title" => "Product"
    ]);
});
Route::get('product/rbd-coconut-oil', function () {
    return view('product-7', [
        "title" => "Product"
    ]);
});

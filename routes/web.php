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

Route::get('/', [ProductController::class, 'index']);


Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
  Route::get('/{slug}', [ProductController::class, 'show']);
});

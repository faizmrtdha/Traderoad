<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
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

Route::get('/admin', [LoginController::class, 'index'])->name('admin')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/product', DashboardProductController::class)->middleware('auth');
Route::get('/dashboard/product/checkSlug', [DashboardProductController::class,'checkSlug'])->middleware('auth');

// Route::resource('/dashboard/product', DashboardProductController::class);


// Route::get('/admin', function(){
//     return view('login.index',[
//         "title" => "Login"
//     ]);
// });

Route::get('/product/{product:slug}', [ProductController::class, 'show']);

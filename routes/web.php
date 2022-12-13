<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
    return view('clatos/login');
});
Route::get('/createnew', function () {
    return view('clatos/createnew');
});
Route::get('/workspace', function () {
    return view('clatos/workspace');
});

Route::get('/dashboard', function () {
    return view('theme/dashboard');
});
Route::get('/bussiness_details', function () {
    return view('clatos/bussinessdetail');
});
Route::get('/calls', function () {
    return view('theme/call');
});

Route::get('/test', function () {
    return view('theme/try');
});
Route::get('/leads', function () {
    return view('theme/leadsandcustomer');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category', CategoryController::class);
//Route::resource('/product', ProductController::class);
Route::get('/CategoryShow{id}', [ProductController::class, 'show']);
Route::get('theme', function () {
    return view('theme.theme');
});

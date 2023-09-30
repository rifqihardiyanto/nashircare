<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nashir-foam', function () {
    return view('produk.foam');
});
Route::get('/nashir-kapsul', function () {
    return view('produk.kapsul');
});
Route::get('/nashir-oil', function () {
    return view('produk.oil');
});
Route::get('/nashir-cream', function () {
    return view('produk.salep');
});

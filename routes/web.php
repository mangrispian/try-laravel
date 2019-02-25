<?php

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
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/detail/{id?}', function ($id = 'Rispian') {
    return view('detail', array('id' => $id));
})->name('detail');

Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

Route::get('/checkout', function () {
    return "Halaman Checkout";
});
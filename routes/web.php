<?php

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
//default laravel
Route::get('/', function () {
    return view('welcome');
});

//rute baru
Route::get('hello', function () {
    return '<h1>Belajar Laravel</h1>';
});

//rute baru
Route::get('product/{id}/{nama}', function ($id, $nama) {
    return '<h1>Product ID: ' . $id . '</h1><br>
    <h1>Nama: ' . $nama . '</h1>';
});

//route to controller
Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('belajar',[\App\Http\Controllers\BelajarController::class, 'jumlah']);

//rute to controller to views
Route::get('list-product', [\App\Http\Controllers\BelajarController::class, 'product']);


//rute for balai
Route::resource('balai', \App\Http\Controllers\BalaiController::class);
//rute untuk delete balai
Route::get('balai/destroy/{id}',[\App\Http\Controllers\BalaiController::class, 'destroy'])->name('balai.destroy');

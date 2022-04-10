<?php

use Illuminate\Support\Facades\Route;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

//custom prefix url laravel
Route::group(['prefix' => 'admin'], function () {
    Route::get('admin', function () {
        return '<h1>Halaman Admin</h1>';
    });
});

Route::group(['prefix' => 'kadis'], function () {
    Route::get('kadis-rute', function () {
        return '<h1>Halaman Kadis</h1>';
    });
});

//rute for balai
Route::resource('balai', \App\Http\Controllers\BalaiController::class)->middleware('auth');
//rute untuk delete balai
Route::get('balai/destroy/{id}',[\App\Http\Controllers\BalaiController::class, 'destroy'])->name('balai.destroy');

//rute for tipe balai
Route::resource('tipebalai', \App\Http\Controllers\TipeBalaiController::class);
//rute untuk destroy tipe balai
Route::get('tipebalai/destroy/{id}',[\App\Http\Controllers\TipeBalaiController::class, 'destroy'])->name('tipebalai.destroy');

Route::resource('jabatan', \App\Http\Controllers\JabatanController::class);

//test QRCODE
Route::get('qrcode', function () {
    return \QrCode::size('500')
            ->style('round')
            ->backgroundColor(255, 255, 255)
            ->color(52,152,219)
            ->eye('square')
            ->generate('https://www.google.com');
    // return response($image)->header('Content-type', 'image/png');
});
//deploylaravel heroku
//rute alat
Route::resource('alat', \App\Http\Controllers\AlatController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

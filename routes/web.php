<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BarangController;

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
    return view('0095home');
});
Route::get('/0095barang', function () {
    return view('0095barang');
});
Route::get('/0095pelanggan', function () {
    return view('0095pelanggan');
});
Route::get('/0095transaksi', function () {
    return view('0095transaksi');
});
Route::get('/0095user', function () {
    return view('0095user');
});
Route::get('/0095barang/barang_tambah', function () {
    return view('barang_tambah');
});
Route::get('/0095pelanggan/pelanggan_tambah', function () {
    return view('pelanggan_tambah');
});
Route::get('/0095transaksi/transaksi_tambah', function () {
    return view('transaksi_tambah');
});
Route::get('/0095user/user_tambah', function () {
    return view('user_tambah');
});
Route::resource('barang', 'app\Http\Controllers\BarangController::class');

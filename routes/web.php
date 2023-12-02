<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controller;
use App\http\Controllers\logincontroller;
use App\http\Controllers\produkcontroller;
use App\http\Controllers\AuthControll;

//home
Route::get('/home', [Controller::class, 'index']);

//register
Route::get('/register', [AuthControll::class, 'register']);
Route::post('/register', [AuthControll::class, 'store']);

//login admin&petugas
Route::get('/login', [logincontroller::class, 'login']);
Route::post('/login', [logincontroller::class, 'proseslogin']);

//DATA PRODUK
Route::get('/produk', [Controller::class, 'tampilproduk']);
Route::get('/delete/{id}', [produkcontroller::class, 'deleteproduk']);
Route::get('/tambah', [produkcontroller::class, 'tambahproduk']);
Route::post('/tambah', [produkcontroller::class, 'prosesproduk']);
// Route::post('/update/{id}', [pengaduanController::class, 'proses_update_pengaduan']);
// Route::get('/update/{id}', [pengaduanController::class, 'update_pengaduan']);

//DATA PELANGGAN
Route::get('/pelanggan', [Controller::class, 'tampilpelanggan']);



// Route::get('/welcome', function () {
//     return view('welcome'); //menampilkan file welcome di views
// });

// Route::get('/login', [Controller::class, 'login']);

// Route::get('/register', function () {
//     return view ("register");
// });

//register
// Route::get('/register', [Controller::class, 'register']);
// Route::post('/register', [Controller::class, 'register']);


Route::get('/', function () {
    return view('welcome');
});






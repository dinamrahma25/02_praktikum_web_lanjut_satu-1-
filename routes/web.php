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
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "Nama: Dina Maulidatur Rahma", "NIM : 2141720199";
});
Route::get('/articles1', function () {
    echo "Nama: Dina Maulidatur Rahma", "NIM : 2141720199";
});
Route::get('/articles/2', function () {
    echo "Nama: Dina Maulidatur Rahma", "NIM : 2141720199";
});
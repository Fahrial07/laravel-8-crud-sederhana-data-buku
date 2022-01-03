<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('tambah-buku', [BukuController::class, 'index']);
Route::post('proses', [BukuController::class, 'inputData']);
Route::get('hapus-data/{id_buku}', [BukuController::class, 'delete']);
Route::post('update-data/{id_buku}', [BukuController::class, 'edit']);

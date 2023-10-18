<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CastController;






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

Route::get('/',[UserController::class, 'utama'] );

Route::get('/biodata', [HomeController::class, 'bio']);

Route::post('/kirim', [HomeController::class, 'kirim']);

Route::get('/table', function () {
    return view('halaman.table');
});
Route::get('/data-table', function () {
    return view('halaman.data-Table');
});

// crud
Route::get('/cast/create', [CastController::class, 'create']);

// untuk kirim data kedatabase
Route::post('/cast', [CastController::class, 'store']);


// tampil semua datanya

Route::get('/cast', [CastController::class, 'index']);

// detail cast
Route::get('/cast/{cast_id}',[CastController::class, 'show']);

// ubdate
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);

// ubdate kedatabase sesuai id
Route::put('/cast/{cast_id}',[CastController::class, 'update']);

// HAPUS BERDASARKAN ID
Route::delete('/cast/{cast_id}',[CastController::class, 'destroy']);


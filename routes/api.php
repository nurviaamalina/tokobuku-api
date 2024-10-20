<?php


use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route untuk mendapatkan informasi pengguna yang terautentikasi
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API resource route untuk Kategori
Route::apiResource('kategoris', KategoriController::class);

Route::apiResource('bukus', BukuController::class);
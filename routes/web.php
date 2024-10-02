<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

// disini kita bisa mengcustom path sesuka kita tapi tidak boleh ada yang sama, jika ada yang sama akan terpanggil yang paling atas saja

// fungsi get untuk mengambil suatu hal itu/menampil kan sesuatu
// fungsi post biasanya untuk action mengirim inputan baru dari user ke database
Route::get('/', [WisataController::class, 'index']);
Route::get('/create',[WisataController::class, 'create']);
Route::post('/store', [WisataController::class, 'store']);
Route::get('/show/{id}',[WisataController::class, 'show']);
Route::get('/edit/{id}', [WisataController::class, 'edit']);
Route::post('/update/{id}',[WisataController::class, 'update']);
Route::get('/delete/{id}',[WisataController::class, 'destroy']);


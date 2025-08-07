<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/Siswa/create',[SiswaController::class,'create']);


Route::get('/',[SiswaController::class,'index']);


Route::post('/Siswa/store',[SiswaController::class,'store']);

Route::get('/Siswa/delete/{id}',[SiswaController::class,'destroy'])->name('siswa.destroy');

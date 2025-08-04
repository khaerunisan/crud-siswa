<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/Siswa/create',[SiswaController::class,'create']);


Route::get('/',[SiswaController::class,'index']);


Route::post('/Siswa/store',[SiswaController::class,'store']);


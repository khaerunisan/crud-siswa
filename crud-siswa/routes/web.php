<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/Siswa/create', function () {
    return view('Siswa.create');
});

Route::get('/', function () {
    return view('Siswa.index');
});

Route::post('/Siswa/store',[SiswaController::class,'store']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasController;
use App\Http\Controllers\SiswaController;

// Route Siswa

Route::get('/Siswa/create',[SiswaController::class,'create']);


Route::get('/',[SiswaController::class,'index']);


Route::post('/Siswa/store',[SiswaController::class,'store']);

Route::get('/Siswa/delete/{id}',[SiswaController::class,'destroy'])->name('siswa.destroy');

Route::get('/Siswa/show/{id}',[SiswaController::class,'show']);

Route::get('/Siswa/edit/{id}',[SiswaController::class,'edit']);

Route::post('/Siswa/update/{id}',[SiswaController::class,'update']);

// Route Clas

//Route clas
Route::get('/clas', [ClasController::class, 'index'])->name('clas.index');
Route::get('/clas/create', [ClasController::class, 'create'])->name('clas.create');
Route::post('/clas', [ClasController::class, 'store'])->name('clas.store');
Route::get('/clas/edit/{id}', [ClasController::class, 'edit'])->name('clas.edit');
Route::put('/clas/{id}', [ClasController::class, 'update'])->name('clas.update');
Route::delete('/clas/{id}', [ClasController::class, 'destroy'])->name('clas.destroy');
Route::get('/clas/show/{id}', [ClasController::class, 'show'])->name('clas.show');




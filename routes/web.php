<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DasbordController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DasbordController::class,'index'])
    ->name('admin.dashbord');
Route::resource('Barang', BarangController::class);

<?php

use App\Http\Controllers\ReservasControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/um', [ReservasControllers::class, 'index'])->name('rota.um');
Route::get('/dois', [ReservasControllers::class, 'store'])->name('rota.dois');

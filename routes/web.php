<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionPersonalController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('informacion_personal', InformacionPersonalController::class);

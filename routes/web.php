<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NaissanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/naissance', [NaissanceController::class ,'create'])->name('naissance');

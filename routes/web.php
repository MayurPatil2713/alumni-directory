<?php

use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumni', [AlumniController::class, 'index'])
    ->name('alumni.index');



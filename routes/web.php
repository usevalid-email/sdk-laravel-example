<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EmailValidationController;

Route::post('/validate-email', [EmailValidationController::class, 'validateEmail'])
    ->name('validate.email');

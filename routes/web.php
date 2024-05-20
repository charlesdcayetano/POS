<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('login', 'Auth\LoginController@login')->name('login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});
// Route::view('/index','home/index');
Route::get('/index', [homeController::class, 'index']);
Route::view('/products','products/index');


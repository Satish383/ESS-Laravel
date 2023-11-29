<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/about-us', function () {
    return view('Frontend.about-us');
});

Route::get('/services', function() {
    return view('Frontend.services');
});

Route::get('/recruitment&career', function() {
    return view('Frontend.recruitment&career');
});

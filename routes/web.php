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
    return view('welcome');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/layout', function () {
    return view('layouts.layout');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/entries', function () {
    return view('pages.entries');
});
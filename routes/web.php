<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');
Route::get('/how-it-works', function () {
    return view('howitworks');
})->name('howitworks');

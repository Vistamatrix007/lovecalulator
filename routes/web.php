<?php

use Illuminate\Support\Facades\Route;

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
    return view('website.index');
});

Route::get('love-calculator', function () {
    return view('website.love-calculator');
});

Route::get('calculator', function () {
    return view('website.calculator');
});
Route::get('about', function () {
    return view('website.about');
});
Route::get('privacy-policy', function () {
    return view('website.privacy-policy');
});

Route::get('scientific-calculator', function () {
    return view('website.scientific-calculator');
});
Route::get('loan-calculator', function () {
    return view('website.auto-loan-calculator');
});

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

Route::get('/homePage', function () {
    return view('index');
});

Route::get('/signInPage', function () {
    return view('signIn');
});

Route::get('/contactPage', function () {
    return view('contact');
});

Route::get('/servicePage', function () {
    return view('service');
});
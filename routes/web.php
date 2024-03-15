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
Route::prefix('users')->group(function () {
    Route::get('/home', function () {
        return view('clients.layouts.layout');
    })->name('home');
    Route::get('/contact', function () {
        // return view('clients.layouts.layout');
    })->name('contact');
    // Route::get('/home', function () {
    //     // return view('clients.layouts.layout');
    // });
});
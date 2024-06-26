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


    $comics = config('comics.comics');
    return view('guests.comics', compact('comics'));

})->name('home');


Route::get('/single_product', function () {

    $comics = config('comics.comics');
    return view('guests.single_product', compact('comics'));

})->name('single_product');


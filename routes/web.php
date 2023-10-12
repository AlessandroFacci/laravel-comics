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
    $comic_books = config('db');
    // dd($comics);
    return view('home', compact('comic_books'));
})->name('home');

Route::get('/comics', function (){
    $title = 'ACTION COMICS #1000: THE DELUXE EDITION';
    return view('comics', compact('title'));
})->name('comics'); 
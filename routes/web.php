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
    $title_head = 'Home';
    $comic_books = config('db');
    // dd($comics);
    return view('home', compact('title_head', 'comic_books'));
})->name('home');

Route::get('/comics', function (){
    $title_head = 'Comics';
    $title = 'ACTION COMICS #1000: THE DELUXE EDITION';
    return view('comics', compact('title_head', 'title'));
})->name('comics'); 
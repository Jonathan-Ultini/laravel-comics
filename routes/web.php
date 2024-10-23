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
    return view('pages.home');
})->name('pages.home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('pages.comic-index', compact('comics'));
})->name('comic-index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id] ?? abort(404);
    return view('pages.comic-show', compact('comic'));
})->name('comics.show');
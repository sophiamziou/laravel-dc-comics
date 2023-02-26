<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
use App\Http\Controllers\PagesController;
use App\Models\Comic;

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
});

// Route::get('/comics', function () {
//     $books = config('db.books');
//     return view('comics', compact('books'));
// })->name('comics');

Route::get('/', [PagesController::class, 'getHomepage'])->name('homepage');

// Route::get('/home', [ComicController::class, 'index'])->name('comics');

Route::resource('comics', ComicController::class);

// Route::get('/comics/{param}', function ($param) {
//     $books = Comic::all();
//     $single_book = $books[$param];
//     return view('single_comic', compact('single_book'));
// })->name('single-comic');
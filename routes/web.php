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
    return view('pages.home');
}) ->name('home');


Route::get('comics', function () {

    $comics = config('comics');

    // dd($comics);
    return view('pages.comics.index', compact('comics'));
})->name('comics');



// Single Comic
Route::get('single_comic/ {id}', function ($id) {

    $comics = config('comics');

     $singleComic = $comics[$id];
    return view('pages.comics.show', compact('singleComic'));

})->name('index.show');

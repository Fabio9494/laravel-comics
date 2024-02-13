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
    return view('comics');
})->name('comics');

Route::view('/characters', 'characters')->name('characters');
Route::view('/movies', 'movies')->name('movies');
Route::view('/tv', 'tv')->name('tv');
Route::view('/videos', 'videos')->name('videos');
Route::view('/games', 'games')->name('games');
Route::view('/fans', 'fans')->name('fans');
Route::view('/news', 'news')->name('news');
Route::view('/shop', 'shop')->name('shop');


Route::get('/comics/{param}', function ($id) {
    $comics = config('comics');
    
    foreach($comics as $item){
        if($item['id'] == $id){
            $comic = $item;
        }
    }

    return view('comicDetails', compact('comic'));
})->name('comicDetails');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CommentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/library', function () {
    return view('library');
})->name('library');

Route::get('/question', function () {
    return view('question');
})->name('question');

Route::get('/news_page/{id}', [NewsController::class, 'show'])->name('news_page');

Route::post('/comment', [CommentController::class, 'addComment'])->name('comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

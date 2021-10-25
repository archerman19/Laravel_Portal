<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CommentController;
use App\Http\Controllers\Educ\EducController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/education', [EducController::class, 'index'])->name('education');

Route::get('/library', function () {
    return view('library');
})->name('library');

Route::get('/question', function () {
    return view('question');
})->name('question');

Route::get('/news_page/{id}', [NewsController::class, 'show'])->name('news_page');

Route::get('/education/{id}', [EducController::class, 'show'])->name('one-educ');

Route::post('/comment', [CommentController::class, 'addComment'])->name('comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/develop', function () {
    return view('education');
})->name('develop');

Route::get('/design', function () {
    return view('education');
})->name('design');

Route::get('/administration', function () {
    return view('education');
})->name('administration');

Route::get('/marketing', function () {
    return view('education');
})->name('marketing');

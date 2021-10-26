<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\CommentController;
use App\Http\Controllers\Educ\EducController;
use App\Http\Controllers\Question\QuestionController;

Route::get('/', function () {
    return view('home');
})->name('main');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/education', [EducController::class, 'index'])->name('education');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/question', function () {
    return view('question');
})->name('question');

Route::get('/news_page/{id}', [NewsController::class, 'show'])->name('news_page');

Route::get('/education/{id}', [EducController::class, 'show'])->name('one-educ');

Route::post('/comment', [CommentController::class, 'addComment'])->name('comment');

Route::post('/questions', [QuestionController::class, 'addQuestion'])->name('questions');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/develop', [EducController::class, 'showDevelopArticles'])->name('develop');

Route::get('/design', [EducController::class, 'showDesignArticles'])->name('design');

Route::get('/administration', [EducController::class, 'showAdministrationArticles'])->name('administration');

Route::get('/marketing', [EducController::class, 'showMarketingArticles'])->name('marketing');

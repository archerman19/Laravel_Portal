<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

	$router->resource('users', UserController::class);
	$router->resource('news', NewsController::class);
	$router->resource('comment', CommentController::class);
	// $router->resource('comment', 'CommentController', ['except' => ['create', 'store']]);
    // // доп.маршрут, чтобы разрешить публикацию комментария
    // $router->get('comment/enable/{comment}', 'CommentController@enable')
    //     ->name('comment.enable');
    // // доп.маршрут, чтобы запретить публикацию комментария
    // $router->get('comment/disable/{comment}', 'CommentController@disable')
    //     ->name('comment.disable');

});

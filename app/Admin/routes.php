<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/users',UserController::class);
    $router->resource('/articles',ArticleController::class);
    $router->resource('/banners',BannerController::class);
    $router->resource('/sprucecase',SpruceCaseController::class);
    $router->resource('/business',BusinessController::class);
    $router->resource('/asks',AskController::class);
    $router->resource('/comments',CommentController::class);
    $router->resource('/replies',ReplyController::class);



});

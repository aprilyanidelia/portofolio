<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\footerController;
use App\Admin\Controllers\projectController;
use App\Admin\Controllers\tentang1Controller;
use App\Admin\Controllers\tentang2Controller;
use App\Admin\Controllers\UserPortoController;
use App\Admin\Controllers\sertifikatController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('user-portos', UserPortoController::class);
    $router->resource('tentang1s', tentang1Controller::class);
    $router->resource('tentang2s', tentang2Controller::class);
    $router->resource('projects', projectController::class);
    $router->resource('sertifikats', sertifikatController::class);
    $router->resource('footers', footerController::class);

});

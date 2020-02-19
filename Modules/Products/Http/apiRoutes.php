<?php

use Illuminate\Routing\Router;


Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });

/** @var Router $router */
// 'api.token', 'auth.admin'
$router->group(['prefix' => '/products', 'middleware' => ['auth.guest']], function (Router $router) {
    $router->group(['prefix' => 'product'], function (Router $router) {
        $router->get('getlist', [
            'as' => 'admin.products.product.index',
            'uses' => 'ProductapiController@getlist',
        ]);
    });
});

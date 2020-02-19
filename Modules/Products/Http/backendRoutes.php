<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/products'], function (Router $router) {
    $router->bind('product', function ($id) {
        return app('Modules\Products\Repositories\ProductRepository')->find($id);
    });
    $router->get('products', [
        'as' => 'admin.products.product.index',
        'uses' => 'ProductController@index',
        'middleware' => 'can:products.products.index'
    ]);
    $router->get('products/create', [
        'as' => 'admin.products.product.create',
        'uses' => 'ProductController@create',
        'middleware' => 'can:products.products.create'
    ]);
    $router->post('products', [
        'as' => 'admin.products.product.store',
        'uses' => 'ProductController@store',
        'middleware' => 'can:products.products.create'
    ]);
    $router->get('products/{product}/edit', [
        'as' => 'admin.products.product.edit',
        'uses' => 'ProductController@edit',
        'middleware' => 'can:products.products.edit'
    ]);
    $router->put('products/{product}', [
        'as' => 'admin.products.product.update',
        'uses' => 'ProductController@update',
        'middleware' => 'can:products.products.edit'
    ]);
    $router->delete('products/{product}', [
        'as' => 'admin.products.product.destroy',
        'uses' => 'ProductController@destroy',
        'middleware' => 'can:products.products.destroy'
    ]);
    $router->get('products/getlist', [
        'as' => 'admin.products.product.getlist',
        'uses' => 'ProductController@getlist',
        'middleware' => 'can:products.products.getlist'
    ]);
// append

});

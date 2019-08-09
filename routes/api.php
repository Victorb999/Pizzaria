<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('pizzas')->group(function(){
        Route::get('/','PizzaController@index')->name('pizzas');
        Route::get('/{id}','PizzaController@show')->name('unico');

        Route::post('/','PizzaController@store')->name('store');
        Route::put('/{id}','PizzaController@update')->name('update');
        Route::delete('/{id}','PizzaController@delete')->name('delete');
    });    
});

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('pedidos')->group(function(){
        Route::get('/','PedidoController@index')->name('pedidos');
        Route::get('/{id}','PedidoController@show')->name('unico');

        Route::post('/','PedidoController@store')->name('store');
        Route::put('/{id}','PedidoController@update')->name('update');
        Route::delete('/{id}','PedidoController@delete')->name('delete');
    });    
});

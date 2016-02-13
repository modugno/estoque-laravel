<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'Primeira Lógica com Laravel';
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/produtos', 'ProdutoController@lista');
	Route::get('produtos/json', 'ProdutoController@listaJson');
	Route::get('produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
	Route::get('produtos/novo', 'ProdutoController@novo');
	Route::post('produtos/adiciona', 'ProdutoController@adiciona');
	Route::get('produtos/editar{id}', 'ProdutoController@editar');
	Route::post('produtos/atualizar', 'ProdutoController@atualizar');
	Route::get('produtos/remove/{id}', 'ProdutoController@remove');
	Route::get('home', 'HomeController@index');
	Route::get('login', 'LoginController@login');
	Route::post('auth', 'LoginController@auth');
});

Route::controllers([
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
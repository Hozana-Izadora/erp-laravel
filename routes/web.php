<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//PRODUTOS
Route::get('/Produtos/index', 'ProdutosController@index')  ->name('produtos.index');
Route::get('/Produtos/add',   'ProdutosController@create') ->name('produtos.add');
Route::get('/Produtos/store', 'ProdutosController@store')  ->name('produtos.insert@get');
Route::post('/Produtos/store', 'ProdutosController@store') ->name('produtos.insert@post');

// CLIENTES
Route::get('/Clientes/index', 'ClientesController@index')  ->name('cliente.index');
Route::get('/Clientes/add',   'ClientesController@create') ->name('cliente.add');
Route::get('/Clientes/store', 'ClientesController@store')  ->name('cliente.insert@get'); 
Route::post('/Clientes/store', 'ClientesController@store') ->name('cliente.insert@post');



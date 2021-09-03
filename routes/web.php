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
Route::get('/Produtos/index', 'ProdutosController@index')->name('index');
Route::get('/Produtos/add', 'ProdutosController@store')->name('add');

// CLIENTES
Route::get('/Clientes/index', 'ClientesController@index');
Route::get('/Clientes/add', 'ClientesController@store')->name('clientes.store');



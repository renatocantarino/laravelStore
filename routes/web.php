<?php

use Illuminate\Support\Facades\Route;

Route::get('/produtos', 'ProdutoController@All' );
Route::get('/produto/new', 'ProdutoController@new' );
Route::get('/produto/delete/{id}', 'ProdutoController@delete')->where('id' , '[0-9]+');
Route::post('/produto/add/', 'ProdutoController@add' );
Route::get('/produto/show/{id}', 'ProdutoController@get')->where('id' , '[0-9]+');




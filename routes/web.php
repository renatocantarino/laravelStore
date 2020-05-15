<?php

use Illuminate\Support\Facades\Route;

Route::get('/produtos', 'ProdutoController@All' );
Route::get('/produtos/novo', 'ProdutoController@new' );
Route::get('/produto/show/{id}', 'ProdutoController@get')->where('id' , '[0-9]+');




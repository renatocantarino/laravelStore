<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{


    public function All()
    {

        $produtos = DB::select('select  * from produtos');
        return view('Produto/list')->withProdutos($produtos);
    }

    public function new()
    {
        return view('Produto/new');
    }

    public function get($id)
    {
        $produto = DB::select('select  * from produtos  where id = ? ', [$id]  );

        if(empty($produto))
          abort(404 , "produto não existe");


        return view('Produto/show')->with('p', $produto[0]);
    }
}

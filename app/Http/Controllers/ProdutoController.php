<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{

    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function All()
    {

        $produtos = DB::select('select  * from produtos');
        return view('Produto.list')->withProdutos($produtos);
    }

    public function new()
    {
        return view('Produto/new');
    }

    public function add()
    {
        $nome =  $this->request->input('nome');
        $valor =  $this->request->input('valor');
        $descricao =  $this->request->input('descricao');
        $quantidade =  $this->request->input('quantidade');


        DB::insert('insert into produtos (nome, descricao, valor, quantidade) values (?,?,?,?)',
                   array($nome ,  $descricao , $valor , $quantidade));

       return redirect('/produtos');
    }

    public function get($id)
    {
        $produto = DB::select('select  * from produtos  where id = ? ', [$id]  );

        if(empty($produto))
          abort(404 , "produto não existe");


        return view('Produto/show')->with('p', $produto[0]);
    }

    public function delete($id)
    {
        DB::select('delete from produtos  where id = ? ', [$id]  );
        return redirect('/produtos');
    }
}

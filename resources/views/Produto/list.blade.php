@extends('layout.principal')

@section('conteudo')
<div class="container">
    <h1>Listagem de produtos</h1>
    <table class="table  table-striped table-bordered table-hover">

        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade<5  ? table-danger : '' }}">
            <td>{{ $p->nome }} </td>
            <td>{{ $p->valor }} </td>
            <td>{{ $p->descricao }} </td>
            <td>{{ $p->quantidade }} </td>
            <td>
                <a href="/produto/show/<?= $p->id ?>" title ="exibir item">
                   <span class="glyphicon glyphicon-search"></span>
                </a>

                 <a href="/produto/buy/<?= $p->id ?>"  title ="comprar">
                    <span class="glyphicon glyphicon-credit-card"></span>
                 </a>

                 <a href="/produto/delete/<?= $p->id ?>"  title ="exluir">
                    <span class="glyphicon glyphicon-trash"></span>
                 </a>


            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop

@extends('layout.principal')

@section('conteudo')
<div class="container">
    <h1>Listagem de produtos</h1>
    <table class="table  table-striped table-bordered table-hover">

        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade <= 4 ? table-danger : '' }} ">
            <td>{{ $p->nome }} </td>
            <td>{{ $p->valor }} </td>
            <td>{{ $p->descricao }} </td>
            <td>{{ $p->quantidade }} </td>
            <td> <a href="/produto/show/<?= $p->id ?>">
            <span class="glyphicon glyphicon-search"></span>
                </a></td>
        </tr>
        @endforeach
    </table>
</div>
@stop

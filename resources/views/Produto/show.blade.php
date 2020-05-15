@extends('layout.principal')

@section('conteudo')
<div class="container">
    <h2> Detalhes do produto</h2>

    <div class="card">
        <div class="card-header"><?= $p->nome ?> </div>
        <div class="card-body">
            <ul>
                <li>
                    <b>Valor:</b> R$ <?= $p->valor ?>
                </li>
                <li>
                    <b>Descrição:</b> <?= $p->descricao ?>
                </li>
                <li>
                    <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop

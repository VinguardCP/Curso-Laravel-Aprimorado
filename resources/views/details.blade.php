@extends('layout')
@section('title', 'Details')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s21 m6">
        <img src="{{$produto->imagem}}" class="responsive-img">
    </div>
    <div class="col s12 m6">
        <h3> {{$produto->nome}}</h3>
        <h3> R$ {{number_format($produto->preco, 2, ',', '.')}}</h3>
        <p>{{$produto->descricao}}</p>
        <p> Postado por {{$produto->user->firstName}}<br>
            Categoria: {{$produto->categoria->nome}}
        </p>
        <button class="btn orange btn-large">Comprar</button>
        </div>
</div>

@endsection
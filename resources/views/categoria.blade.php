@extends('layout')
@section('title', 'Categoria')

@section('conteudo')

<div class="container">

    <div class="section">
        <h4>Categoria: {{$categoria->nome}}</h4>
    </div>

    <div class="masonry">
        @foreach ($produtos as $produto)
            <div class="masonry-item">
                <div class="card">
                    <div class="card-image">
                        <img src="{{$produto->imagem}}">
                        <a href="{{route('details', $produto->slug)}}" 
                           class="btn-floating halfway-fab waves-effect waves-light red">
                           <i class="material-icons">visibility</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{$produto->nome}}</span>
                        <p>{{$produto->descricao}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

<div class="row center">
    {{$produtos->links('custom.pagination')}}
</div>

@endsection
@extends('layout')
@section('title', 'Carrinho')

@section('conteudo')

    <div class="container">

        @if ($mensagem = Session::get('sucesso'))
            <div class="card green">
                <div class="card-content white-text">
                    <span class="card-title">Parabéns</span>
                    <p>{{ $mensagem }}</p>
                </div>
            </div>
        @endif

        @if ($mensagem = Session::get('aviso'))
            <div class="card blue">
                <div class="card-content white-text">
                    <span class="card-title">Tudo bem!</span>
                    <p>{{ $mensagem }}</p>
                </div>
            </div>
        @endif

        @if (count($itens) == 0)
            <div class="card orange">
                <div class="card-content white-text">
                    <span class="card-title">Seu carrinho está vazio</span>
                    <p>Aproveite nossas promoções</p>
                </div>
            </div>
        @else
            <div class="section">
                <h4>Seu carrinho possui {{ count($itens) }} produtos.</h4>
            </div>

            <table class="striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @php $total = 0; @endphp

                    @foreach ($itens as $id => $item)
                        @php
                            $total += $item['preco'] * $item['quantidade'];
                        @endphp

                        <tr>
                            <td>
                                <img src="{{ $item['imagem'] }}" width="70" class="responsive-img circle">
                            </td>

                            <td>{{ $item['nome'] }}</td>

                            <td>R$ {{ number_format($item['preco'], 2, ',', '.') }}</td>

                            <td>
                                <form action="{{ route('atualizacarrinho') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <input style="width: 60px" type="number" name="quantity" min="1"
                                        value="{{ $item['quantidade'] }}">
                            </td>

                            <td>
                                <button class="btn-floating orange">
                                    <i class="material-icons">refresh</i>
                                </button>
                                </form>

                                <form action="{{ route('removecarrinho') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <button class="btn-floating red">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <h4>Valor total: R$ {{ number_format($total, 2, ',', '.') }}</h4>

        @endif

        <div class="row container center">
            <a href="{{ route('index') }}" class="btn blue">Continuar Comprando</a>
            <a href="{{ route('limparcarrinho') }}" class="btn red">Limpar Carrinho</a>
            <button class="btn green">Finalizar Pedido</button>
        </div>

    </div>

@endsection

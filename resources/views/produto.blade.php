@extends('layout')

@section('title', 'Detalhes do Produto')

@section('content')
    <h1 class="mb-4">Produto</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title h4 mb-3">{{ $produto['nome'] }}</h2>
            <p><strong>ID:</strong> {{ $produto['id'] }}</p>
            <p><strong>Nome:</strong> {{ $produto['nome'] }}</p>
            <p><strong>Preço:</strong> R$ {{ number_format($produto['preco'], 2, ',', '.') }}</p>
            <p><strong>Estoque:</strong> {{ $produto['estoque'] }}</p>
            <p>
                <strong>Situação:</strong>
                @if ($produto['estoque'] > 0)
                    <span class="badge bg-success">DISPONÍVEL</span>
                @else
                    <span class="badge bg-danger">ESGOTADO</span>
                @endif
            </p>

            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection

@extends('layout')

@section('title', 'Detalhes do Jogo')

@section('content')
    <h1 class="mb-4">Jogo</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title h4 mb-3">{{ $jogo['nome'] }}</h2>
            <p><strong>ID:</strong> {{ $jogo['id'] }}</p>
            <p><strong>Nome:</strong> {{ $jogo['nome'] }}</p>
            <p><strong>Gênero:</strong> {{ $jogo['genero'] }}</p>
            <p>
                <strong>Preço:</strong>
                @if ($jogo['preco'] == 0)
                    <span class="badge bg-success">GRÁTIS</span>
                @else
                    R$ {{ number_format($jogo['preco'], 2, ',', '.') }}
                @endif
            </p>
            <p><strong>Idade mínima:</strong> {{ $jogo['idade_minima'] }} anos</p>

            <a href="{{ route('jogos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection

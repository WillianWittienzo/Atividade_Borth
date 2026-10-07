@extends('layout')

@section('title', 'Detalhes do Filme')

@section('content')
    <h1 class="mb-4">Filme</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title h4 mb-3">{{ $filme['titulo'] }}</h2>
            <p><strong>ID:</strong> {{ $filme['id'] }}</p>
            <p><strong>Título:</strong> {{ $filme['titulo'] }}</p>
            <p><strong>Ano:</strong> {{ $filme['ano'] }}</p>
            <p>
                <strong>Classificação:</strong>
                @if ($filme['classificacao'] === 'LIVRE')
                    <span class="badge bg-success">LIVRE</span>
                @elseif ($filme['classificacao'] === '12 ANOS')
                    <span class="badge bg-primary">12 ANOS</span>
                @elseif ($filme['classificacao'] === '16 ANOS')
                    <span class="badge bg-warning text-dark">16 ANOS</span>
                @else
                    <span class="badge bg-danger">18 ANOS</span>
                @endif
            </p>

            <a href="{{ route('filmes.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection

@extends('layout')

@section('title', 'Lista de Jogos')

@section('content')
    <h1 class="mb-4">Lista de Jogos</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>Preço</th>
                    <th>Idade mínima</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jogos as $jogo)
                    <tr>
                        <td>{{ $jogo['id'] }}</td>
                        <td>{{ $jogo['nome'] }}</td>
                        <td>{{ $jogo['genero'] }}</td>
                        <td>
                            @if ($jogo['preco'] == 0)
                                <span class="badge bg-success">GRÁTIS</span>
                            @else
                                R$ {{ number_format($jogo['preco'], 2, ',', '.') }}
                            @endif
                        </td>
                        <td>{{ $jogo['idade_minima'] }} anos</td>
                        <td>
                            <a href="{{ route('jogo.detalhes', $jogo['id']) }}" class="btn btn-primary btn-sm">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

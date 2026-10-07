@extends('layout')

@section('title', 'Lista de Produtos')

@section('content')
    <h1 class="mb-4">Lista de Produtos</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Situação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto['id'] }}</td>
                        <td>{{ $produto['nome'] }}</td>
                        <td>R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
                        <td>{{ $produto['estoque'] }}</td>
                        <td>
                            @if ($produto['estoque'] > 0)
                                <span class="badge bg-success">DISPONÍVEL</span>
                            @else
                                <span class="badge bg-danger">ESGOTADO</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('produto.detalhes', $produto['id']) }}" class="btn btn-primary btn-sm">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

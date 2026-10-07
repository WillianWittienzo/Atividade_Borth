<?php

namespace App\Http\Controllers;

class FilmeController extends Controller
{
    private array $filmes = [
        ['id' => 1, 'titulo' => 'A Viagem das Estrelas', 'ano' => 2022, 'classificacao' => 'LIVRE'],
        ['id' => 2, 'titulo' => 'O Mistério da Montanha', 'ano' => 2020, 'classificacao' => '12 ANOS'],
        ['id' => 3, 'titulo' => 'Cidade das Sombras', 'ano' => 2023, 'classificacao' => '16 ANOS'],
        ['id' => 4, 'titulo' => 'Noite Sem Fim', 'ano' => 2021, 'classificacao' => '18 ANOS'],
        ['id' => 5, 'titulo' => 'O Jardim Encantado', 'ano' => 2019, 'classificacao' => 'LIVRE'],
    ];

    public function index()
    {
        return view('filmes', ['filmes' => $this->filmes]);
    }

    public function show($id)
    {
        foreach ($this->filmes as $filme) {
            if ($filme['id'] == $id) {
                return view('filme', ['filme' => $filme]);
            }
        }

        abort(404);
    }
}

<?php

namespace App\Http\Controllers;

class JogoController extends Controller
{
    private array $jogos = [
        ['id' => 1, 'nome' => 'Corrida Estelar', 'genero' => 'Corrida', 'preco' => 0, 'idade_minima' => 10],
        ['id' => 2, 'nome' => 'Reinos de Cristal', 'genero' => 'Aventura', 'preco' => 79.90, 'idade_minima' => 12],
        ['id' => 3, 'nome' => 'Arena dos Heróis', 'genero' => 'Ação', 'preco' => 129.50, 'idade_minima' => 16],
        ['id' => 4, 'nome' => 'Fazenda Feliz', 'genero' => 'Simulação', 'preco' => 39.90, 'idade_minima' => 6],
        ['id' => 5, 'nome' => 'Enigma da Ilha', 'genero' => 'Quebra-cabeça', 'preco' => 59.00, 'idade_minima' => 10],
    ];

    public function index()
    {
        return view('jogos', ['jogos' => $this->jogos]);
    }

    public function show($id)
    {
        foreach ($this->jogos as $jogo) {
            if ($jogo['id'] == $id) {
                return view('jogo', ['jogo' => $jogo]);
            }
        }

        abort(404);
    }
}

<?php

namespace App\Http\Controllers;

class ProdutoController extends Controller
{
    private array $produtos = [
        ['id' => 1, 'nome' => 'Teclado Mecânico', 'preco' => 199.90, 'estoque' => 10],
        ['id' => 2, 'nome' => 'Mouse Sem Fio', 'preco' => 89.50, 'estoque' => 15],
        ['id' => 3, 'nome' => 'Monitor 24 Polegadas', 'preco' => 899.00, 'estoque' => 4],
        ['id' => 4, 'nome' => 'Fone de Ouvido', 'preco' => 129.90, 'estoque' => 0],
        ['id' => 5, 'nome' => 'Webcam HD', 'preco' => 159.00, 'estoque' => 7],
        ['id' => 6, 'nome' => 'Suporte para Notebook', 'preco' => 74.90, 'estoque' => 0],
    ];

    public function index()
    {
        return view('produtos', ['produtos' => $this->produtos]);
    }

    public function show($id)
    {
        foreach ($this->produtos as $produto) {
            if ($produto['id'] == $id) {
                return view('produto', ['produto' => $produto]);
            }
        }

        abort(404);
    }
}

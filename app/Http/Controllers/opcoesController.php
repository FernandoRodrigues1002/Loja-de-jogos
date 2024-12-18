<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class opcoesController extends Controller
{
    public function index()
    {
        $todosProdutos = produto::all();

        $produtosRecente = Produto::orderBy('PRODUTO_ID', 'desc')->take(10)->get();

        // Retorna a view 'welcome2' com as variáveis 'produto' e 'produtosRecente'
        return view('welcome2', [
            'produto' => $todosProdutos,
            'produtosRecente' => $produtosRecente,
        ]);
    }

    public function show(Produto $produto, Request $request)
    {
        $produtosRelacionados = Produto::where('CATEGORIA_ID', $produto->CATEGORIA_ID)->where('PRODUTO_ID', '!=', $produto->PRODUTO_ID)->get();
        return view('show', [
            'produto' => $produto,
            'produtosRelacionados' => $produtosRelacionados
        ]);
    }

    public function recomendados(){
        $recomendados = produto::all();

        return view('recomendados', [
            'recomendados' => $recomendados,
        ]);
    }

    public function showAll(Request $request)
    {
        $query = Produto::query();

        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'price_asc':
                    $query->orderBy('PRODUTO_PRECO', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('PRODUTO_PRECO', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('PRODUTO_NOME', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('PRODUTO_NOME', 'desc');
                    break;
            }
        }

        $produtos = $query->get();

        return view('todos')->with('produto', $produtos);
    }




    public function adicionadosRecente(){
        $produtosRecente = Produto::orderBy('PRODUTO_ID', 'desc')->take(20)->get();

        return view('recente', [
            'produtosRecente' => $produtosRecente,
        ]);
    }

    
}

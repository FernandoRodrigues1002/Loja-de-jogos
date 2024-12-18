<?php

namespace App\Http\Controllers;

use App\Models\Pesquisa;
use Illuminate\Http\Request;


class PesquisaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $pesquisas = Pesquisa::where('PRODUTO_NOME', 'like', "%{$query}%")
                ->orWhere('PRODUTO_DESC', 'like', "%{$query}%")
                ->orWhereHas('categoria', function ($queryCategoria) use ($query) {
                    $queryCategoria->where('CATEGORIA_NOME', 'like', "%{$query}%");
                })
                ->get();
        } else {
            $pesquisas = Pesquisa::all();
        }

        return view('pesquisas', compact('pesquisas', 'query'));
    }
}



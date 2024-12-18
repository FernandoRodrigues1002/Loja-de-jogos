<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Carrinho;

class CarrinhoController extends Controller
{
    public function carrinho()
    {
        $user = Auth::user();
        $carrinho = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                            ->where('ITEM_QTD', '>', 0)
                            ->get();

        return view('cart', compact('carrinho'));
    }

    public function adicionar(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['redirect' => route('login')]);
        }

        $request->validate([
            'produto_id' => 'required|integer|exists:PRODUTO,PRODUTO_ID',
            'usuario_id' => 'required|integer|exists:USUARIO,USUARIO_ID',
            'item_qtd' => 'required|integer|min:1'
        ]);                

        $carrinhoItem = Carrinho::where('USUARIO_ID', $request->usuario_id)
                                ->where('PRODUTO_ID', $request->produto_id)
                                ->first();

        if ($carrinhoItem) {
            $carrinhoItem->ITEM_QTD += $request->item_qtd;
            $carrinhoItem->save();
        } else {
            Carrinho::create([
                'USUARIO_ID' => $request->usuario_id,
                'PRODUTO_ID' => $request->produto_id,
                'ITEM_QTD' => $request->item_qtd
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function atualizarQuantidade(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|integer|exists:PRODUTO,PRODUTO_ID',
            'quantity' => 'required|integer|min:0'
        ]);

        $user = Auth::user();

        // Atualiza apenas o item específico
        Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                ->where('PRODUTO_ID', $request->produto_id)
                ->update(['ITEM_QTD' => $request->quantity]);

        // Recalcula o subtotal apenas com os itens do carrinho
        $subtotal = Carrinho::where('USUARIO_ID', $user->USUARIO_ID)
                            ->where('ITEM_QTD', '>', 0)
                            ->get()
                            ->sum(function($item) {
                                return $item->produto->PRODUTO_PRECO * $item->ITEM_QTD;
                            });

        return response()->json(['success' => true, 'subtotal' => $subtotal]);
    }




}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Carrinho;
use App\Models\User;
use App\Models\Cadastro;
use App\Models\produto;
use Carbon\Carbon;

class PedidoController extends Controller
{
    public function finalizarCompra(Request $request)
    {
        // Obter o ID do usuário logado
        $usuarioId = Auth::id();

        // Obter o endereço associado ao usuário logado
        $endereco = Cadastro::where('USUARIO_ID', $usuarioId)->first();

        if (!$endereco) {
            return redirect()->back()->withErrors(['msg' => 'Endereço não encontrado para o usuário.']);
        }

        $enderecoId = $endereco->ENDERECO_ID;

        // Definir o ID do status como 1 (por exemplo, "Pendente")
        $statusId = 1;

        // Definir a data do pedido como a data atual
        $pedidoData = Carbon::now();

        // Criar um novo pedido
        $pedido = new Pedido();
        $pedido->USUARIO_ID = $usuarioId;
        $pedido->ENDERECO_ID = $enderecoId;
        $pedido->STATUS_ID = $statusId;
        $pedido->PEDIDO_DATA = $pedidoData;
        $pedido->save();

        Carrinho::where('USUARIO_ID', $usuarioId)->update([
            'ITEM_QTD' => 0
        ]);
        //Carrinho::where('USUARIO_ID', $usuarioId)->delete();
        // Redirecionar o usuário para uma página de confirmação
        return view('confirmacao');
    }
    public function confirmacao()
    {
        return view('confirmacao');
    }
}

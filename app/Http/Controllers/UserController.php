<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Endereco;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {   
        $request->validate([
            'USUARIO_NOME' => 'required|string|max:500',
            'USUARIO_EMAIL' => 'required|string|email|max:500|unique:USUARIO',
            'USUARIO_SENHA' => 'required|string|min:8|max:500|confirmed',
            'USUARIO_CPF' => 'required|string|min:11|max:11|unique:USUARIO',
            'ENDERECO_NOME' => 'required|string|max:500',
            'ENDERECO_LOGRADOURO' => 'required|string|max:500',
            'ENDERECO_NUMERO' => 'required|string|max:500',
            'ENDERECO_COMPLEMENTO' => 'nullable|string|max:500',
            'ENDERECO_CEP' => 'required|string|max:8',
            'ENDERECO_CIDADE' => 'required|string|max:500',
            'ENDERECO_ESTADO' => 'required|string|max:2',
        ]);

        $user = User::create([
            'USUARIO_NOME' => $request->USUARIO_NOME,
            'USUARIO_EMAIL' => $request->USUARIO_EMAIL,
            'USUARIO_SENHA' => Hash::make($request->USUARIO_SENHA),
            'USUARIO_CPF' => $request->USUARIO_CPF,
        ]);

        Cadastro::create([
            'USUARIO_ID' => $user->USUARIO_ID,
            'ENDERECO_NOME' => $request->ENDERECO_NOME,
            'ENDERECO_LOGRADOURO' => $request->ENDERECO_LOGRADOURO,
            'ENDERECO_NUMERO' => $request->ENDERECO_NUMERO,
            'ENDERECO_COMPLEMENTO' => $request->ENDERECO_COMPLEMENTO,
            'ENDERECO_CEP' => $request->ENDERECO_CEP,
            'ENDERECO_CIDADE' => $request->ENDERECO_CIDADE,
            'ENDERECO_ESTADO' => $request->ENDERECO_ESTADO,
        ]);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
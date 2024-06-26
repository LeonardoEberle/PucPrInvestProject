<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposta;

class PropostaController extends Controller
{
    public function index()
    {
        // Busca todas as propostas do banco de dados
        $propostas = Proposta::all();

        // Retorna a view 'user.proposal' com as propostas
        return view('user.proposal', compact('propostas'));
    }
}

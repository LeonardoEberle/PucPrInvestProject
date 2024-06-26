<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ideia;
use App\Models\Proposta;
use illuminate\Support\Facades\Auth;

class PropostaController extends Controller
{

    public function index()
    {
        // Busca todas as propostas do banco de dados
        $propostas = Proposta::all();

        // Retorna a view 'user.proposal' com as propostas
        return view('user.proposal', compact('propostas'));
    }
    public function propform($id){
        $ideia = Ideia::findOrFail($id);
        return view('ideias.propose', ['ideia'=>$ideia]);
    }
    public function create (Request $request){
        $proposta = new Proposta;

        $proposta -> proposta_valor = $request->valor;
        $proposta -> proposta_objetivo = $request->objetivo;
        $proposta -> proposta_usuarioID = $request->proposta_usuarioID;
        $proposta -> proposta_ideiaID = $request->proposta_ideiaID;

        $proposta->save();

        return redirect('/dashboard');
    }

}

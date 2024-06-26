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
        $userId = Auth::user()->usuario_id;

        $propostas = Proposta::where('proposta_usuarioID', $userId)->get();
        $ideias = Ideia::all();
        $propostasrec = Proposta::whereHas('ideia', function ($query) use ($userId) {
            $query->where('ideia_usuarioID', $userId);
        })->get();

        return view('user.proposal', compact('propostas', 'ideias', 'propostasrec'));
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

    public function update(Request $request){
        Proposta::findOrFail($request->proposta_id)->update($request->all());

        return redirect('/dashboard');
    }

}

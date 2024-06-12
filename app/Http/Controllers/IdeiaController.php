<?php

namespace App\Http\Controllers;
use App\Models\Ideia;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IdeiaController extends Controller
{

    public function index(){
        $userId = auth()->user()->id;

        $ideias = Ideia::where('ideia_usuarioID', $userId)->get();

        return view('carteira/carteiraList', ['ideias' => $ideias]);
    }

    public function list (){
        $ideias = Ideia::all();

        return view ('ideias/list', ['ideias'=> $ideias]);
    }

    public function exibir(){
        return view ('ideias/update');
    }

    public function create (){
        return view('ideias/create');
    }
    public function store (Request $request){
        $usuario = Auth::user()->usuario_id;

        $ideia = new Ideia;
        $ideia -> ideia_nome = $request->nome;
        $ideia -> ideia_descricao = $request->descricao;
        $ideia -> ideia_cnpj = $request->cnpj;
        $ideia -> ideia_valorMercado = $request->valormercado;
        $ideia -> ideia_statusID = $request->status;
        $ideia -> ideia_categoriaID = $request->categoria;
        $ideia -> ideia_faseID = $request->fase;
        $ideia -> ideia_usuarioID = $usuario;

        $ideia->save();

        return redirect('/ideias');
    }

    public function show($id){
        $ideia = Ideia::findOrFail($id);
        return view ('ideias/details' , ['ideia'=>$ideia]);
    }
}

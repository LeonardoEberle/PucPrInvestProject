<?php

namespace App\Http\Controllers;
use App\Models\Ideia;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IdeiaController extends Controller
{

    public function index(){
        $userId = Auth::user()->usuario_id;

        $ideias = Ideia::where('ideia_usuarioID', $userId)->get();

        return view('carteira/carteiraList', ['ideias' => $ideias]);
    }

    public function list (){
        $ideias = Ideia::where('ideia_aprovada', 1)->get();
        return view('ideias/list', ['ideias' => $ideias]);
    }

    public function exibir($id){
        $ideia = Ideia::findOrFail($id);
        return view ('ideias/update', ['ideia'=>$ideia]);
    }

    public function update(Request $request){
        Ideia::findOrFail($request->id)->update($request->all());
        return redirect('carteira/carteiraList');
    }

    public function destroy(Request $request){
        Ideia::findOrFail($request->id)->delete();
        return redirect('carteira/carteiraList');
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

    public function showAcc(){
        $ideias = Ideia::where('ideia_aprovada', 0)->get();


        return view('manager.acceptList', ['ideias'=>$ideias]);
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Ideia;

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

    public function show(){
        return view ('ideias/detail');
    }
    public function exibir(){
        return view ('ideias/update');
    }
}

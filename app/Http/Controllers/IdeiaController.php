<?php

namespace App\Http\Controllers;
use App\Models\Ideia;

use Illuminate\Http\Request;

class IdeiaController extends Controller
{

    public function index(){

        return view ('carteira/carteiraList');
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

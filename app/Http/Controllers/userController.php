<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    public function index(){
        $users = Usuario::all();

        return view ('user.profile', ['users'=> $users]);
    }

    function RandomId($length = 15) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomId = '';
        for ($i = 0; $i < $length; $i++) {
            $randomId .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomId;
    }


    public function create (){
        return view('authenticate.create');
    }

    public function store (Request $request){
        $id = $this->RandomId();
        $usuario = new Usuario;

        $usuario -> usu_id = $id;
        $usuario -> usu_nome = $request -> nome;
        $usuario -> usu_email = $request -> nome;
        $usuario -> usu_senha = Hash::make($request->senha);
        $usuario -> usu_telefone = $request -> telefone;
        $usuario -> usu_cpf = $request -> cpf;
        $usuario -> usu_genero = $request -> genero;
        $usuario -> usu_cargo = $request -> cargo;

        $usuario->save();

        return redirect('/profile');
    }
}

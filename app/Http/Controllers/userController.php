<?php

namespace App\Http\Controllers;

use illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    public function showAll(){
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

        $usuario -> usuario_id = $id;
        $usuario -> usuario_nome = $request -> nome;
        $usuario -> usuario_sobrenome = $request -> sobrenome;
        $usuario -> usuario_email = $request -> email;
        $usuario -> usuario_senha = Hash::make($request->senha);
        $usuario -> usuario_telefone = $request -> telefone;
        $usuario -> usuario_cpf = $request -> cpf;
        $usuario -> usuario_genero = $request -> genero;
        $usuario -> usuario_dataNascimento = $request -> nascimento;
        $usuario -> usuario_cargo = 2;

        $usuario->save();

        return redirect('/');
    }

    public function read (){
        $usuario = Auth::user();

        return view('user.profile', ['usuario'=>$usuario]);
    }

    public function update(Request $request){

        $usuario = Usuario::findOrFail(Auth::user()->usuario_id);
        $usuario->usuario_nome = $request->nome;
        $usuario->usuario_sobrenome = $request->sobrenome;
        $usuario->usuario_email = $request->email;
        $usuario->usuario_telefone = $request->telefone;
        $usuario->usuario_biografia = $request->biografia;

        $usuario->save();



        return redirect('/dashboard');

    }

    public function delete (){

        Usuario::findOrFail(Auth::user()->usuario_id)->delete();
        Auth::logout();
        return redirect('/');
    }
}

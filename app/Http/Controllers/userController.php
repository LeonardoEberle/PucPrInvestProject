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

    function RandomId($length = 5) {
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
        $usuario = new Usuario;

        $usuario -> email = $request -> email;
        $usuario -> password = Hash::make($request->password);

        $usuario->save();

        return redirect('/profile');
    }
}

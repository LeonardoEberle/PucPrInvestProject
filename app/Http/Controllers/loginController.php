<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function auth (Request $request){
        $credentials = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('user.profile');
            //intended vai voltar para ultima rota caso haja
        }else{
            return redirect()->back()->with('erro', 'email ou senha invalidos');
        }
    }
}

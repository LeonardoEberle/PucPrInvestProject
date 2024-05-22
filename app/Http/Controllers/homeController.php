<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class homeController extends Controller
{
    public function index(){
        $users = Usuario::all();

        return view ('welcome', ['users'=> $users]);
    }
}

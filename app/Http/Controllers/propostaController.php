<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class propostaController extends Controller
{
    public function index(){
        return view('user.proposal');
    }
    public function propform(){
        return view('ideias.propose');
    }
}

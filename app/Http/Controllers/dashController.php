<?php

namespace App\Http\Controllers;
use App\Models\Ideia;

use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index(){
        $ideias = Ideia::all()->take(6);

        return view ('dashboard.home', ['ideias'=> $ideias]);
    }
}

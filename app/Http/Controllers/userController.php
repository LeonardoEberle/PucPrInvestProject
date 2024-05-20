<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $users = Users::all();

        return view ('user.profile', ['users'=> $users]);
    }
}

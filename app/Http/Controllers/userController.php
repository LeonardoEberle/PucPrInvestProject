<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $users = Users::all();

        return view ('user.profile', ['users'=> $users]);
    }

    function RandomId($length = 7) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomId = '';
        for ($i = 0; $i < $length; $i++) {
            $randomId .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomId;
    }

    public function create (){
        //hash pass + id aleatorio
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    public function login(){
        $a=User::all();
        return response($a);

    }
}

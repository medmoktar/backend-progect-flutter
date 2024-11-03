<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\type_Ecole;


class type_EcoleController extends Controller
{
    public function all(){
         $x=type_Ecole::get();
         return response($x);
    }
}

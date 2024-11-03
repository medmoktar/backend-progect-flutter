<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_stuctureCente;

class type_stucturecenteController extends Controller
{
    public function all(){
      $x=type_stuctureCente::get();
      return response($x);
    }
}

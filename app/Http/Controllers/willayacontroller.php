<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\willaya;
class willayacontroller extends Controller
{
    public function getwillaya($id){
       $reponse=User::find($id)->willayas;
       return response($reponse);
    }

    public function hopitaux($id){
       $x=willaya::find($id);
       $y=$x->hopitaux->count();
       return response($y);
    }
    public function Ecole($id){
        $x=willaya::find($id);
        $y=$x->Ecole->count();
        return response($y);
     }
}

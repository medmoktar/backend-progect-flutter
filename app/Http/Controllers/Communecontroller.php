<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moughataa;
use App\Models\Commune;

class Communecontroller extends Controller
{
    public function getcommune($id){
        $x=Moughataa::find($id);
        $y=$x->Commune;
        return response($y);
    }

    public function hopitaux($id){
        $x=Commune::find($id);
        $y=$x->hopitaux->count();
        return response($y);
     }
     public function Ecole($id){
         $x=Commune::find($id);
         $y=$x->Ecole->count();
         return response($y);
      }
}

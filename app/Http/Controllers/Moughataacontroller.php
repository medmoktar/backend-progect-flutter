<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\willaya;
use App\Models\Moughataa;
class Moughataacontroller extends Controller
{
    public function getmoughataa($id){
        $x=willaya::find($id);
        $y=$x->Moughataa;
        return response($y);
    }

    public function hopitaux($id){
       $x=Moughataa::find($id);
       $y=$x->hopitaux->count();
       return response($y);
    }
    public function Ecole($id){
        $x=Moughataa::find($id);
        $y=$x->Ecole->count();
        return response($y);
     }
}

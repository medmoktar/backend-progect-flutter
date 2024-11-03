<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reseaux;

use App\Models\Village;
class reseauxController extends Controller
{
    public function all(){
        $x=reseaux::get();
        return response($x);
      }

    public function insert($id){
      $x=Village::find($id);
      $y=reseaux::where('nom','=',request('nom'))->first();
      $x->reseauxes()->attach( $y->id);
      return response('Success',201);
    }  

    public function store($id){
      $x=Village::find($id);
      $y=$x->reseauxes;
      return response($y);
    }
}

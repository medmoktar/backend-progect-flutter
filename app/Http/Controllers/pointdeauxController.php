<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pointdeaux;

use App\Models\Village;

class pointdeauxController extends Controller
{
    public function all(){
       $x=pointdeaux::all();
       return response($x);
    }

    public function insert($id){
        $x=Village::find($id);
        $y=pointdeaux::where('nom','=',request('nom'))->first();
        $x->pointdeauxes()->attach( $y->id);
        return response('Success',201);
      }  

      public function delete($id){
        $x=Village::find($id);
        
          $x->pointdeauxes()->detach();
        
        // return response("");
        
    }

      public function store($id){
        $x=Village::find($id);
        $y=$x->pointdeauxes;
        return response($y);
      }
}

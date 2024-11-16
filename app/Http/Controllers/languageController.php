<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;
use App\Models\Village;
class languageController extends Controller
{
    public function all(){
        $x=language::get();
        return response($x);
      }

      public function insert($id){
        $x=Village::find($id);
        $y=language::where('nom','=',request('nom'))->first();
        $x->languages()->attach( $y->id);
        return response('Success',201);
      }  

      public function delete($id){
        $x=Village::find($id);
        
          $x->languages()->detach();
        
        // return response("");
        
    }

      public function store($id){
        $x=Village::find($id);
        $y=$x->languages;
        return response($y);
      }
}

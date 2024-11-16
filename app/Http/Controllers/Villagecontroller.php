<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\Commune;


class Villagecontroller extends Controller
{
    public function addvillage(Request $request){
        // $validated = $request->validate([
        //     'nom' => 'required',
        //     'nom_arabic'=>'required',
        //     'commune_id' => 'required', 
        //     'Popilation'=>'required',
        //     'altidude'=>'required',
        //     'longitude'=>'required'
        // ]);
        $z=Village::create($request->all());
        return response($z);
        
    }
    public function getvillage($id){
       $x=Commune::find($id);

       if (!$x) {
        return response()->json(['error' => 'Commune not found'], 404);
    }

       $y=$x->Village;
       return response($y,200); 
    }

    public function hopitaux($id){
        $x=Village::find($id);
        $y=$x->hopitaux->count();
        return response($y);
     }
     public function Ecole($id){
         $x=Village::find($id);
         $y=$x->Ecole->count();
         return response($y);
      }

      public function update($id){
         $x=Village::find($id);
         $y=$x->update(request()->all());
         if(!$y){
            return response('error');
         }
         return response('success',200);
      }

     

    

    
}

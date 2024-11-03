<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;
use App\Models\Hopitaux;
class hopitauxcontroller extends Controller
{
    public function count($id){
        $x=Village::find($id);
        $y=$x->Hopitaux->count();
        return response($y);
    }

    public function all($id){
        $x=Village::find($id);
        $y=$x->Hopitaux;
        $y->transform(function($hopital) {
        $hopital->photo_url = asset('storage/' . $hopital->photo);
        return $hopital;
    });
             return response($y);
        }

        public function create(Request $request){
            
            $photoPath = "";
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
            }
        
            Hopitaux::create([
                'nom' => $request->input('nom'),
                'type'=>$request->input('type'),
                'photo' => $photoPath,
                'village_id'=>$request->input('village_id'),
                'longitude'=>$request->input('longitude'),
                'altitude'=>$request->input('altitude')
            ]);
        
            return response()->json(['message' => 'Hopital created successfully'], 201);
         }    
     
         public function update($id){
            $y=Hopitaux::find($id);
            $photoPath = "";
            if (request()->hasFile('photo')) {
                $photoPath = request()->file('photo')->store('photos', 'public');
            }
             $x=$y->update(['nom' => request()->input('nom'),
                 'type'=>request()->input('type'),
                'photo' => $photoPath,
                'village_id'=>request()->input('village_id'),
                'longitude'=>request()->input('longitude'),
                'altitude'=>request()->input('altitude')]);
             return response($x,200);
         }
     
         public function store($id){
             $x=Hopitaux::find($id);
            //  $x->transform(function($hopital){
            //     $hopital->photo_url=asset('storage/'. $hopital->photo);
            //     return $hopital;
            // }); 
            $x->photo_url=asset('storage/'.$x->photo);
             return response($x);
        }

        
    }


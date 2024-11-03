<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;
use App\Models\Ecole;

class Ecolecontroller extends Controller
{
    public function count($id){
        $x=Village::find($id);
        $y=$x->Ecole->count();
        return response($y);
    }

    public function all($id){
        $x=Village::find($id);
        $y=$x->Ecole;
        $y->transform(function($ecole) {
            $ecole->photo_url = asset('storage/' . $ecole->photo);
            return $ecole;
        });
             return response($y);
        }
    public function create(Request $request){
    //    $request->validate([
    //     'nom' => 'required|string|max:255',
    //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);

    $photoPath = "";
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
    }

    Ecole::create([
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
        $y=Ecole::find($id);
        $photoPath = "";
        if (request()->hasFile('photo')) {
            $photoPath = request()->file('photo')->store('photos', 'public');
        }
         $x=$y->update(['nom' => request()->input('nom'),
            'photo' => $photoPath,
            'type'=>request()->input('type'),
            'village_id'=>request()->input('village_id'),
            'longitude'=>request()->input('longitude'),
            'altitude'=>request()->input('altitude')]);
         return response($x,200);
     }

    public function store($id){
        $x=Ecole::find($id);
    //     $x->transform(function($hopital){
    //        $hopital->photo_url=asset('storage/'. $hopital->photo);
    //        return $hopital;
    //    }); 
    $x->photo_url=asset('storage/'.$x->photo);
        return response($x);
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;
use App\Models\Chefvillage;

class chefvillagecontroller extends Controller
{
   public function create(){
    $x=Chefvillage::where("village_id",'=',request()->village_id)->first();
   //  $x=Chefvillage::first();
    if($x){
      $y=$x->update(request()->all());
   }else{
    $y=Chefvillage::create(request()->all());
   }
   return response($y);
}

public function get(){
   $x=Chefvillage::first();
   if($x){
      return response($x,200);
   }else{
      return response('pas de contenue',404);
   }
}
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;
use App\Models\Chefvillage;

class chefvillagecontroller extends Controller
{
   public function create(){
    $y=Chefvillage::create(request()->all());
   
   return response($y);
}

public function update($id){
    $x=Chefvillage::find($id);
    $y=$x->update(request()->all());

    return response($y);
}

public function store($id){
   $x=Village::find($id);
   $y=$x->Chefvillage;
   return response($y);
}
    
}

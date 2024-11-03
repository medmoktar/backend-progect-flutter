<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moughataa extends Model
{
    use HasFactory;

    public function willaya(){
        return $this->belongsTo(willaya::class);
    }
    public function Commune(){
        return $this->hasMany(Commune::class);
    }
    public function hopitaux()
    {
        return $this->hasManyThrough(Hopitaux::class, Village::class, 'commune_id', 'village_id', 'id', 'id');
    }

    public function Ecole()
    {
        return $this->hasManyThrough(Ecole::class, Village::class, 'commune_id', 'village_id', 'id', 'id');
    }
    
}

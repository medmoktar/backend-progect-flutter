<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    public function Moughataas(){
        return $this->belongsTo(Moughataa::class);
    }

    public function Village(){
        return $this->hasMany(Village::class);
    }
    public function hopitaux()
    {
        return $this->hasManyThrough(Hopitaux::class, Village::class);
    }

    public function Ecole()
    {
        return $this->hasManyThrough(Ecole::class, Village::class);
    }
}

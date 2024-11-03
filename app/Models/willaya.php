<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class willaya extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Moughataa(){
        return $this->hasMany(Moughataa::class);
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

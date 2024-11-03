<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_administratif',
        'nom-local',
        'distance_de_la_route',
        'commune_id',
        'Popilation',
        'altidude',
        'longitude'
    ];

    public function Communes(){
        return $this->belongsTo(Commune::class);
    }

    public function Hopitaux(){
        return $this->hasMany(Hopitaux::class);
    }

    public function Ecole(){
        return $this->hasMany(Ecole::class);
    }

    public function Chefvillage(){
        return $this->hasMany(Chefvillage::class);
    }

    public function reseauxes(){
        return $this->belongsToMany(reseaux::class,'village_reseaux');
    }

    public function pointdeauxes(){
        return $this->belongsToMany(pointdeaux::class,'village_pointdeaux');
    }

    public function languages(){
        return $this->belongsToMany(language::class,'village_language');
    }

}

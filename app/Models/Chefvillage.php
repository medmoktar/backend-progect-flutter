<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chefvillage extends Model
{
    use HasFactory;

    protected $fillable=[
       'nom_administratif',
       'nom_local',
       'village_id',
       'tel'
    ];

    public function Villages(){
        return $this->belongsTo(Village::class);
    }

    
}

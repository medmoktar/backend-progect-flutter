<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopitaux extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'type',
      'village_id',
      'altitude',
      'longitude',
      'photo'
    ];

    public function Villages(){
        return $this->belongsTo(Village::class);
    }
}

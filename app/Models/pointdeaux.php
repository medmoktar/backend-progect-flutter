<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pointdeaux extends Model
{
    use HasFactory;

    public function Villages(){
        return $this->belongsToMany(Village::class,'village_pointdeaux');
    }
}

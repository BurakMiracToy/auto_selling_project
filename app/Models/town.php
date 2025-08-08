<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class town extends Model
{
    use HasFactory, softDeletes;

    public function getCar(){
        return $this->hasMany(car::class,'town_id','id');
    }

    public function getCity(){
        return $this->belongsTo(city::class,'city_id','id');
    }
}

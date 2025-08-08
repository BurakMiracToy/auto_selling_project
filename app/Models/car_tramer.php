<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car_tramer extends Model
{
    use HasFactory ,SoftDeletes;
    public function getCar(){
        return $this->hasMany(car::class,'tramer_id','id');
    }
}

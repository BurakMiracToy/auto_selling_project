<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_brand_model extends Model
{
    use HasFactory , softDeletes;

    public $table = 'car_brand_models';

    public function getCar(){
        return $this->hasMany(car::class,'model_id','id');
    }

    public function getBrand(){
        return $this->belongsTo(car_brand::class,'brand_id','id');
    }
}

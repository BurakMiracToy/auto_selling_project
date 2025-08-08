<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_brand extends Model
{
    use HasFactory,softDeletes;

    protected $table = 'car_brands';
    public function getModel(){
        return $this->hasMany(car_brand_model::class,'brand_id','id');
    }
}

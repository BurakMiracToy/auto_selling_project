<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use HasFactory,softDeletes;


    public function getTramer(){
        return $this->belongsTo(car_tramer::class,'tramer_id','id');
    }
    public function getTown(){
        return $this->belongsTo(town::class,'town_id','id');
    }
    public function getModel(){
        return $this->belongsTo(car_brand_model::class,'model_id','id');
    }
    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getMedia(){
        return $this->hasMany(media_gallery::class,'car_id','id');
    }
}

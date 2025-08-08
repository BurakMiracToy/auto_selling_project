<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class media_gallery extends Model
{
    use HasFactory, softDeletes;

    public $table = 'media_galleries';

    public function getCar(){
        return $this->belongsTo(car::class,'car_id','id');
    }
}

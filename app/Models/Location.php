<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['location'];

    public function cars(){
        return $this->belongsTo(Car::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['location_id', 'cite'];

    public function cars(){
        return $this->belongsTo(Car::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }
}

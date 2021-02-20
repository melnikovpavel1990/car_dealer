<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['mark_id', 'model'];

    public function cars(){
        return $this->belongsTo(Car::class);
    }
}

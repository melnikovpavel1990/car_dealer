<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarMark extends Model
{
    protected $fillable = ['mark'];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = ['car_id', 'image'];

    public function image(){
        return $this->hasMany(Car::class);
    }
}

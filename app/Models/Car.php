<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['mark_id', 'model_id', 'transmission_id', 'year', 'color_id', 'power',
        'fuel_id', 'location_id', 'city_id', 'price', 'milleage', 'title', 'description', 'Bluetooth',
        'air_conditioning', 'GPS', 'heated_seats', 'power_seat', 'speed_control', 'ABS', 'airbag', 'alarm',
        'fog_lights', 'heated_mirrors', 'tow_package', 'user_id'];



    public function mark()
    {
        return $this->belongsTo(CarMark::class);
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }


}


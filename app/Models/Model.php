<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $fillable = ['mark_id', 'model'];

    public static function all()
    {
    }
}

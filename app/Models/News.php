<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     protected $fillable = ['title', 'content', 'author_id', 'image'];
//    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}

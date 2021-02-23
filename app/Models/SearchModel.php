<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchModel extends Model
{
    public function getResult(float $price = 0.0, float $area = 0.0)
    {
//        $query = [];
//        if ($price_min) {
//            $query = $query + ['price_min' => $price_min];
//        }
//        if ($price_max) {
//            $query = $query + ['price_max' => $price_max];
//        }
//        if (empty($query)) {
//            return self::all();
//        }
//
//        return $this->where($query)->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Marka;
use App\Models\Model;
use App\Models\SearchModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());
        $query = Car::query();
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }
        if ($request->filled('year_from')) {
            $query->where('year', '>=', $request->year_from);
        }
        if ($request->filled('year_to')) {
            $query->where('year', '<=', $request->year_to);
        }
        foreach (['air_conditioning', 'Bluetooth', 'GPS', 'heated_seats', 'power_seat', 'speed_control', 'ABS', 'airbag', 'alarm',
                     'fog_lights', 'heated_mirrors', 'tow_packag'] as $value){
            if ($request->has($value)) {
                $query->where($value, 1);
            }
        }


            $cars = $query->paginate(22)->withPath($request->getQueryString());


        return view('pages.autoads', compact('cars'));
    }

}

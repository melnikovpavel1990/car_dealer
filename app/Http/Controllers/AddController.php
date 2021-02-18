<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all() -> Join('car_marks', 'car_models', 'cities', 'colors', 'fuels', 'locations', 'transmissions');
//        $cars = CarMark::all();
//        $models = CarModel::all();
//        $cities = City::all();
//        $colors = Color::all();
//        $locations  = Location::all();
//        $fuels = Fuel::all();
//        $transmissions = Transmission::all();
        dd($cars->makr);
        return view('product.create', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $cars = CarMark::all();
//        $models = CarModel::all();
//        $cities = City::all();
//        $colors = Color::all();
//        $locations  = Location::all();
//        $fuels = Fuel::all();
//        $transmissions = Transmission::all();
//        return view('product.create', compact('cars', 'models', 'cities', 'colors',
//            'locations', 'fuels', 'transmissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsRequest;

use App\Models\Car;
use App\Models\CarMark;
use App\Models\CarModel;
use App\Models\City;
use App\Models\Color;
use App\Models\Fuel;
use App\Models\Images;
use App\Models\Location;
use App\Models\Transmission;
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
        $cars = Car::all();
        return view('product.create', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request){
        if($request->has('location_id')){
            $parentId = $request->get('location_id');
            $data = City::where('location_id', $parentId)->get();
            return ['data'=>$data];
        }
        if($request->has('mark_id')){
            $parentId = $request->get('mark_id');
            $data = CarModel::where('mark_id', $parentId)->get();
            return ['data'=>$data];
        }
    }

    public function create(Request $request)
    {
        $marks = CarMark::all();
        $transmissions = Transmission::all();
        $colors = Color::all();
        $fuels = Fuel::all();
        $locations = Location::all();
        return view('product.create', compact('marks', 'colors', 'fuels', 'locations', 'transmissions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarsRequest $request)
    {
        $params = $request->all();
        $params['user_id'] = $request->user_id;
        $car = Car::create($params, $request->all());
        foreach ($request->file('image') as $file) {
            $path = $file->store('public/cars');
            Images::create(['car_id' => $car->id, 'image' => $path]);
        }
        return redirect()->route('Home');
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
        $car = Car::findOrFail($id);
        $marks = CarMark::all();
        $models = CarModel::all();
        $cities = City::all();
        $colors = Color::all();
        $fuels = Fuel::all();
        $locations = Location::all();
        $transmissions = Transmission::all();
        return view('product.edit', compact('car', 'marks', 'models', 'cities', 'colors', 'fuels', 'locations', 'transmissions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarsRequest $request, $id)
    {
        $params = $request->all();
        $params['user_id'] = $request->user_id;
        $car = Car::findOrFail($id);
        foreach (['air_conditioning', 'Bluetooth', 'GPS', 'heated_seats', 'power_seat', 'speed_control', 'ABS', 'airbag', 'alarm',
                     'fog_lights', 'heated_mirrors', 'tow_package'] as $value) {
            if ($request->input($value) == 1) {
                $car->$value = $request->input('$value', 1);
            } else {
                $car->$value = $request->input('$value', 0);
            }
        }
        $car->fill($request->all());
        $car->save();
        if ($request->file('image')  != null) {
            foreach ($request->file('image') as $file) {
                $path = $file->store('public/cars');
                $img = (new \App\Models\Images)->fill(['car_id' => $car->id, 'image' => $path]);
                $img->save();
            }
        }
        return redirect()->route('userAd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $img = Images::where('car_id', '=', $car->id);
        $img->delete();
        $car->delete();
        return redirect()->route('userAd');
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Car;
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
    public function create(Request $request)
    {
        $marks = \App\Models\CarMark::all();
        $models = \App\Models\CarModel::all();
        $transmissions = \App\Models\Transmission::all();
        $colors = \App\Models\Color::all();
        $fuels = \App\Models\Fuel::all();
        $locations = \App\Models\Location::all();
        $cities = \App\Models\City::all();
//        if ($request->has('location_id')) {
//            $parentId = $request->get('location_id');
//            $data = City::where('location_id', $parentId)->get();
//            return ['success' => true, 'data' => $data];
//        }

        return view('product.create', compact('marks', 'models', 'colors', 'fuels', 'locations', 'transmissions', 'cities'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $paths = [];
        foreach ($request->file('img') as $file) {
            $paths[] = $file->store('public/cars');
        }
        $params = $request->all();
        $params['user_id'] = $request->user_id;
        $params['img'] = $paths[0];
        if (isset($params['img2'])) {
            $params['img2'] = $paths[2];
        }
        $params['img1'] = $paths[1];
//        $params['img2'] = $paths[2];
//        $params['img3'] = $paths[3];
//        $params['img4'] = $paths[4];
        Car::create($params, $request->all());
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
        $marks = \App\Models\CarMark::all();
        $models = \App\Models\CarModel::all();
        $cities = \App\Models\City::all();
        $colors = \App\Models\Color::all();
        $fuels = \App\Models\Fuel::all();
        $locations = \App\Models\Location::all();
        $transmissions = \App\Models\Transmission::all();
        return view('product.edit', compact('car', 'marks', 'models', 'cities', 'colors', 'fuels', 'locations', 'transmissions'));

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
        $paths = [];
        foreach ($request->file('img') as $file) {
            $paths[] = $file->store('public/cars');
        }
        $params = $request->all();
        $params['user_id'] = $request->user_id;
        $params['img'] = $paths[0];
        if (isset($params['img2'])) {
            $params['img2'] = $paths[2];
        }
        $params['img1'] = $paths[1];
        $car = Car::findOrFail($id);
        $car->fill($request->all());

        foreach (['air_conditioning', 'Bluetooth', 'GPS', 'heated_seats', 'power_seat', 'speed_control', 'ABS', 'airbag', 'alarm',
                     'fog_lights', 'heated_mirrors', 'tow_package'] as $value) {
            if ($request->input($value) == 1) {
                $car->$value = $request->input('$value', 1);
            } else {
                $car->$value = $request->input('$value', 0);
            }
        }
        $car->save();
        return redirect()->route('userAd');
//        $path = $request->file('image')->store('public/news');
//        $params = $request->all();
//        $params['image'] = $path;
//        $car = Car::findOrFail($id);
//        $new->fill($params,$request->all());
//        $new->save();
//        return redirect()->route('admin_news');
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
        $car->delete();
        return redirect()->route('userAd');
    }
}

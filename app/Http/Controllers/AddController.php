<?php

namespace App\Http\Controllers;


use App\Models\Car;
use App\Models\CarModel;
use App\Models\City;
use App\Models\Color;
use App\Models\Fuel;
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
        $cities = \App\Models\City::with('location')->get();
        $colors = \App\Models\Color::all();
        $fuels = \App\Models\Fuel::all();
        $locations = \App\Models\Location::all();
        $transmissions = \App\Models\Transmission::all();
        return view('product.create', compact('marks', 'models', 'cities', 'colors', 'fuels', 'locations', 'transmissions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $path = $request->file('image')->store('public/news');
//        $params = $request->all();
//        $params['image'] = $path;

        Car::create($request->except('_token', 'img'));
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
//        $path = $request->file('image')->store('public/news');
//        $params = $request->all();
//        $params['image'] = $path;
//        $new = News::findOrFail($id);
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
        //
    }
}

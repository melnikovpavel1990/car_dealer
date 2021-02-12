<?php

namespace App\Http\Controllers;

use App\Models\Marka;
use App\Models\Model;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }

    public function news()
    {
        return view('news');
    }

    public function autoads()
    {
        return view('autoads');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function postad()
    {
        $markas = Marka::all();
       // $models = Model::all();
        return view('product.create', compact('markas'));
    }
}

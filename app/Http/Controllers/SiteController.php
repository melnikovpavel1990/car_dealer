<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Car;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $link='https://www.nbrb.by/api/exrates/rates/145';
        $date= file_get_contents($link);
        $course=\GuzzleHttp\json_decode($date, true);
        $usd=$course['Cur_OfficialRate'];
        $cars = Car::orderBy('id', 'DESC')->get();
        $paid = Car::orderBy('id', 'DESC')->paginate(5);
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('index', compact('news', 'cars', 'paid', 'usd'));
    }

    public function one_car($id)
    {

        $car = Car::findOrFail($id);
        return view('product.onecar', compact('car'));
    }

    public function news()
    {
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('pages.news', compact('news'));
    }

    public function new($id)
    {
        $authors = Author::get();
        $news = News::findOrFail($id);
        return view('pages.new', compact('news', 'authors'));
    }

    public function autoads()
    {
        $cars = Car::orderBy('id', 'DESC')->paginate(5);
        return view('pages.autoads', compact('cars'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }


    public function userAd()
    {

        $cars = Car::orderBy('id', 'DESC')->where('user_id', '=', \Auth::user()->id )->paginate(10);

        return view('pages.autoads', compact('cars'));
    }

}

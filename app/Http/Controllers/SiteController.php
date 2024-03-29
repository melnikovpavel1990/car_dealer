<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Car;
use App\Models\CarMark;
use App\Models\Images;
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
        $cars = Car::orderBy('id', 'DESC')->paginate(9);
        $paid = Car::orderBy('id', 'DESC')->paginate(5);
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('index', compact('news', 'cars', 'paid', 'usd'));
    }

    public function one_car($id)
    {
        $car = Car::findOrFail($id);
        $images = $car ->images;
        if (\Auth::user()){
        $id_user = \Auth::user()->id;
        }else ($id_user=null);
        return view('product.onecar', compact('car', 'images', 'id_user'));
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
        $cars = Car::orderBy('id', 'DESC')
            ->with('mark')
            ->with('model')
            ->with('mark')
            ->with('location')
            ->with('city')
            ->with('transmission')
            ->with('fuel')
            ->with('images')
            ->with('fuel')
            ->paginate(5);
        $marks = CarMark::all();
        return view('pages.autoads', compact('cars', 'marks'));
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

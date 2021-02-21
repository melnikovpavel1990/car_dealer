<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Car;
use App\Models\CarChar;
use App\Models\CarModel;
use App\Models\Marka;
use App\Models\Model;
use App\Models\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('id', 'DESC')->get();
        $paid = Car::orderBy('id', 'DESC')->paginate(2);
        $news = News::orderBy('id', 'DESC')->paginate(6);
        return view('index', compact('news', 'cars', 'paid'));
    }

    public function one_car($id)
    {
        $car = Car::findOrFail($id);
        return view('product.onecar', compact('car'));
    }

    public function news()
    {
        $news = News::orderBy('id', 'DESC')->get();
        return view('news', compact('news'));
    }

    public function new($id)
    {
        $authors = Author::get();
        $news = News::findOrFail($id);
        return view('new', compact('news', 'authors'));
    }

    public function autoads()
    {
        $cars = Car::all();
        return view('autoads', compact('cars'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function telegram()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $token = "1519109465:AAE6t6qCvbDUa_xblwmaB2i8RzvjA-kQO0w";
        $chat_id = "730048692";
        $arr = array(
            'name ' => $name,
            'email' => $email,
            'message' => $message
        );
        $txt = null;
        return view('telegram', compact('token', 'message', 'chat_id', 'arr', 'txt'));
    }
}

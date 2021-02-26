<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Car;
use App\Models\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('id', 'DESC')->get();
        $paid = Car::orderBy('id', 'DESC')->paginate(5);
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('index', compact('news', 'cars', 'paid'));
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

    public function telegram()
    {
//        if ((isset($_POST['name']) && $_POST['name'] != "") && (isset($_POST['email']) && $_POST['email'] != ""
//                && (isset($_POST['message']) && $_POST['message'] != ""))){
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
        return view('pages.telegram', compact('token', 'message', 'chat_id', 'arr', 'txt'));
    }
    public function userAd()
    {

        $cars = Car::orderBy('id', 'DESC')->where('user_id', '=', \Auth::user()->id )->paginate(10);

        return view('pages.autoads', compact('cars'));
    }
}

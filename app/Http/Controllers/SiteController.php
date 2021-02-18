<?php

namespace App\Http\Controllers;

use App\Models\CarChar;
use App\Models\CarModel;
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
        $txt =null;
//        $key = null;
//        $value =null;
        return view('telegram', compact('token', 'message', 'chat_id', 'arr', 'txt'));
    }
}

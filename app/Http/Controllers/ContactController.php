<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
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
}

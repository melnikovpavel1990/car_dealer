@extends('layouts.master')

@section('content')
    @csrf
    <?php
//    token = "1519109465:AAE6t6qCvbDUa_xblwmaB2i8RzvjA-kQO0w";
//    chat_id = "730048692";
//        $name = $_POST['name'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];
//    $token = "1519109465:AAE6t6qCvbDUa_xblwmaB2i8RzvjA-kQO0w";
//    $chat_id = "730048692";
//    $arr = array(
//        'name' => $name,
//        'email' => $email,
//        'message' => $message
//    );
//
    foreach ($arr as $key => $value) {
        if ($value != ""){
        $txt .= " " . $key . ":  " . $value . "%0A";
        }
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot1519109465:AAE6t6qCvbDUa_xblwmaB2i8RzvjA-kQO0w/sendMessage?chat_id=730048692
&parse_mode=html&text={$txt}", "r");

    if ((isset($sendToTelegram))) {
        echo "<h1><span style='color: #ff7f50'>Спасибо</span>, форма отправлена</h1>";
    } else {
        echo('Error');
    }
    ?>
    <br><br><br><br>
@endsection

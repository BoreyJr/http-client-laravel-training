<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function sendMessage()
    {

        $response = Http::post('https://api.telegram.org/bot5325234381:AAGevK464GLNVVUiswVea3tQrRk8gX2_Sco/sendMessage?chat_id=-718012777&text=Hello%%My%%Love', [
            "chat_id" => "-718012777",
            "text" => "A new message from Laravel",
        ]);

        return view('welcome');

    }

    public function getInfo()
    {

        $response = Http::get('https://api.telegram.org/bot5325234381:AAGevK464GLNVVUiswVea3tQrRk8gX2_Sco/getUpdates');
        $data = json_decode($response->body(), true);
        return view('index',compact('data'));

    }
}

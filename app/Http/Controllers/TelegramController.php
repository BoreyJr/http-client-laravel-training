<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function sendMessage()
    {

        return view('welcome');
    }

    public function getInfo()
    {
        return view('index',compact('data'));
    }
}

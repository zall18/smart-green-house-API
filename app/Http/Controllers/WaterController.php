<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    protected $esp8266Ip = 'http://192.168.100.38:8080';

    public function turnOn()
    {

        $response = Http::get("{$this->esp8266Ip}/wOn");

        return response()->json([
            'message' => $response->body(),
        ]);
    }

    public function turnOff()
    {
        $response = Http::get("{$this->esp8266Ip}/wOff");

        return response()->json([
            'message' => $response->body(),
        ]);
    }

    public function waterControl()
    {
        return view('waterControl');
    }
}

<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class ESP32Controller extends Controller
{
    protected $esp32Ip = 'http://192.168.100.31:8080'; // ganti dengan IP ESP32 Anda

    public function turnOn()
    {
        $response = Http::get("{$this->esp32Ip}/H");

        return response()->json([
            'message' => $response->body(),
        ]);
    }

    public function turnOff()
    {
        $response = Http::get("{$this->esp32Ip}/L");

        return response()->json([
            'message' => $response->body(),
        ]);
    }
}

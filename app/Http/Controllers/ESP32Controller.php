<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ESP32Controller extends Controller
{
    protected $esp32Ip = 'http://192.168.137.63:80'; // ganti dengan IP ESP32 Anda

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

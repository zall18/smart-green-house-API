<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorController extends Controller
{
    public function bacasuhu()
    {
        $sensor = MSensor::select('*')->get();
        return response()->json([
            'temperature' => $sensor[0]->suhu
        ]);
    }

    public function bacakelembapan()
    {
        $sensor = MSensor::select('*')->get();
        return response()->json([
            'humidity' => $sensor[0]->kelembapan
        ]);
    }

    public function bacakelembapantnh()
    {
        $sensor = MSensor::select('*')->get();
        return response()->json([
            'soil_mosture' => $sensor[0]->kelembapanTnh
        ]);
    }

    public function simpansensor()
    {
        // MSensor::where('id', 1)->update([
        //     'suhu' => request()->nilaisuhu,
        //     'kelembapan' => request()->nilaikelembapan
        // ]);
        MSensor::where('id', 1)->update([
            'suhu' => request()->nilaisuhu,
            'kelembapan' => request()->nilaikelembapan,
            'kelembapantnh' => request()->nilaikelembapantnh
        ]);
    }
}

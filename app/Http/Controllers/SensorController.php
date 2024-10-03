<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorController extends Controller
{
    public function bacasuhu(){
        $sensor = MSensor::select('*')->get();
        return view('bacasuhu',['nilaisensor' => $sensor]);
    }

    public function bacakelembapan(){
        $sensor = MSensor::select('*')->get();
        return view('bacakelembapan',['nilaisensor' => $sensor]);
    }

    public function bacakelembapantnh(){
        $sensor = MSensor::select('*')->get();
        return view('bacakelembapantanah',['nilaisensor' => $sensor]);
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

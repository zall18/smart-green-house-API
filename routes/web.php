<?php

use App\Http\Controllers\ESP32Controller;
use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Monitoring');
});
Route::get('/lamp', function() {
    return view('index');
});
Route::get('/bacasuhu', [SensorController::class, 'bacasuhu']);
Route::get('/bacakelembapan', [SensorController::class, 'bacakelembapan']);
Route::get('/bacakelembapanTnh', [SensorController::class, 'bacakelembapantnh']);
// Route::get('/simpan/{nilaisuhu}/{nilaikelembapan}', [SensorController::class, 'simpansensor']);
Route::get('/simpan/{nilaisuhu}/{nilaikelembapan}/{nilaikelembapantnh}', [SensorController::class, 'simpansensor']);

Route::get('/on', [ESP32Controller::class, 'turnOn']);
Route::get('/off', [ESP32Controller::class, 'turnOff']);

<?php

use App\Http\Controllers\ESP32Controller;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\WaterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/bacasuhu', [SensorController::class, 'bacasuhu']);
Route::get('/bacakelembapan', [SensorController::class, 'bacakelembapan']);
Route::get('/bacakelembapanTnh', [SensorController::class, 'bacakelembapantnh']);

//Lamp Route
Route::get('/on', [ESP32Controller::class, 'turnOn']);
Route::get('/off', [ESP32Controller::class, 'turnOff']);

//Water Route
Route::get('/waterOn', [WaterController::class, 'turnOn']);
Route::get('/waterOff', [WaterController::class, 'turnOff']);

<?php

use App\Http\Controllers\ESP32Controller;
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
    return view('index');
});

Route::get('/on', [ESP32Controller::class, 'turnOn']);
Route::get('/off', [ESP32Controller::class, 'turnOff']);

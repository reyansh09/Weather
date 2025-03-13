<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index']);
Route::post('/weatherdetail', [WeatherController::class, 'fetchWeather']);
Route::get('/weatherdetail', [WeatherController::class, 'weatherDetail'])->name('weatherDetail'); 

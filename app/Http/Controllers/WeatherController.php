<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather');
    }
    
    public function fetchWeather(Request $request)
{
    $city = $request->input('city', 'Delhi'); // Default city
    $apiKey = env('OPENWEATHER_API_KEY');
    $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

    $response = Http::get($url);
    $weather = $response->json();
    // dd($weather);

    return redirect()->route('weatherDetail')->with([
        'weather' => $weather,
        'city' => $city
    ]);
}
    
public function weatherDetail()
{
    $weather = session('weather');
    $city = session('city');

    return view('weatherdetail', compact('weather', 'city'));
}
    
}

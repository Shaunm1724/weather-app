<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index() {
        $key = config('app.weather_key');
        $name = "Mumbai";
        $temperature = '26.4';
        $condition_text = 'Mist';
        $conditon_icon = '//cdn.weatherapi.com/weather/64x64/night/143.png';

        // input request from user
        $request_prompt = 'Paris';

        // make api request (Done)
        $request_format = 'http://api.weatherapi.com/v1/current.json?key=' . $key . '&q=' . $request_prompt;
        $response = Http::post($request_format);

        // format the response
        $name = $response;

        // return the correct response (Done)
        return view('weather', [
            'name' => $name,
            'temperature' => $temperature,
            'condition_text' => $condition_text,
            'condition_icon' => $conditon_icon
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index() {
        $name = 'Mumbai';
        $temperature = '26.4';
        $condition_text = 'Mist';
        $conditon_icon = '//cdn.weatherapi.com/weather/64x64/night/143.png';

        // make api request
        

        // format the response

        // return the correct response
        return view('weather', [
            'name' => $name,
            'temperature' => $temperature,
            'condition_text' => $condition_text,
            'condition_icon' => $conditon_icon
        ]);
    }
}

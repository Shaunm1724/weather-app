<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{

    public function callApi(Request $request) {
        $key = config('app.weather_key');
        $name = '';
        $temperature = '';
        $condition_text = '';
        $conditon_icon = '';

        // input request from user 
        $request_prompt = $request->input('city', 'Mumbai');

        // make api request 
        $request_format = 'http://api.weatherapi.com/v1/current.json?key=' . $key . '&q=' . $request_prompt;
        $response = Http::post($request_format);
        
        // format the response 
        if ($response->successful()) {
            $current = $response["current"];
            $name = $response["location"]["name"];
            $temperature = $current["temp_c"];
            $condition_text = $current["condition"]["text"];
            $conditon_icon = $current["condition"]["icon"];
        } 

        // return the correct response 
        return view('weather', [
            'name' => $name,
            'temperature' => $temperature,
            'condition_text' => $condition_text,
            'condition_icon' => $conditon_icon
        ]);
    }

    public function index(Request $request) {
        return view('weather');
    }
}

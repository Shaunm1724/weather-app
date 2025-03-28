<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request) {
        $key = config('app.weather_key');
        $name = "Mumbai";
        $temperature = '26.4';
        $condition_text = 'Mist';
        $conditon_icon = '//cdn.weatherapi.com/weather/64x64/night/143.png';

        // input request from user 
        $request_prompt = $request->input('city', 'Mumbai');
        $request_prompt = ($request_prompt == null)? 'Mumbai': $request_prompt;

        try {
            // make api request 
        $request_format = 'http://api.weatherapi.com/v1/current.json?key=' . $key . '&q=' . $request_prompt;
            $response = Http::post($request_format);
            $current = $response["current"];
    
            // format the response 
            $name = $response["location"]["name"];
            $temperature = $response["current"]["temp_c"];
            $condition_text = $current["condition"]["text"];
            $conditon_icon = $current["condition"]["icon"];
        } catch(Exception $e) {
            return $e->getMessage();
        }

        // // make api request 
        // $request_format = 'http://api.weatherapi.com/v1/current.json?key=' . $key . '&q=' . $request_prompt;
        // $response = Http::post($request_format);

        // // format the response
        // $name = $response["location"]["name"];
        // $temperature = $response["current"]["temp_c"];
        // $condition_text = $request["current"]["condition"]["text"];
        // $conditon_icon = $request["current"]["condition"]["icon"];




        // return the correct response 
        return view('weather', [
            'name' => $name,
            'temperature' => $temperature,
            'condition_text' => $condition_text,
            'condition_icon' => $conditon_icon
        ]);
    }
}

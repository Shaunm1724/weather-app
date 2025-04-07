<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index'])->name('weatherapp');
Route::post('/current', [WeatherController::class, 'callApi'])->name('weatherappapi');

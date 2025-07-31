<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    public function index()
    {
        try {
            if (!Storage::exists('weather.json')) {
                // Create default weather data if file doesn't exist
                $defaultWeather = [
                    ["day" => "Monday", "high" => 75, "low" => 60, "condition" => "Sunny"],
                    ["day" => "Tuesday", "high" => 72, "low" => 58, "condition" => "Partly Cloudy"],
                    ["day" => "Wednesday", "high" => 68, "low" => 55, "condition" => "Rain"],
                    ["day" => "Thursday", "high" => 70, "low" => 57, "condition" => "Cloudy"],
                    ["day" => "Friday", "high" => 74, "low" => 61, "condition" => "Sunny"]
                ];
                return view('weather.index', ['weather' => $defaultWeather]);
            }

            $json = Storage::get('weather.json');
            $weatherData = json_decode($json, true);
            
            // Check if JSON decoding was successful
            if ($weatherData === null) {
                throw new \Exception('Invalid JSON in weather.json file');
            }
            
            return view('weather.index', ['weather' => $weatherData]);
        } catch (\Exception $e) {
            // Return default data if anything goes wrong
            $defaultWeather = [
                ["day" => "Monday", "high" => 75, "low" => 60, "condition" => "Sunny"],
                ["day" => "Tuesday", "high" => 72, "low" => 58, "condition" => "Partly Cloudy"],
                ["day" => "Wednesday", "high" => 68, "low" => 55, "condition" => "Rain"]
            ];
            return view('weather.index', ['weather' => $defaultWeather]);
        }
    }

}

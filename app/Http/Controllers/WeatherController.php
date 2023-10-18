<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function getWeather(Request $request)
    {
        $apiKey = env('OPENWEATHER_API_KEY');
        $city = $request->input('city');

        $client = new Client();
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            return view('weather', ['weatherData' => $data]);
        } catch (\Exception $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}

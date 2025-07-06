<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $apiKey = config('app.openweathermap_api_key');
        $city = 'Tokyo';
        $units = 'metric'; // 摂氏
        $lang = 'ja';

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $city,
            'appid' => $apiKey,
            'units' => $units,
            'lang' => $lang,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return view('weather.index', ['weather' => $data]);
        } else {
            \Log::error('天気API失敗:', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);
            return response()->json([
                'error' => '天気情報の取得に失敗しました'
            ], $response->status());
        }
    }
}

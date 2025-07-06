@extends('layouts.app')

@section('content')
<div>
    <h1>現在の天気（{{ $weather['name'] }}）</h1>
    <p>{{ $weather['weather'][0]['description'] }}</p>
    <p>気温：{{ $weather['main']['temp'] }} ℃</p>
    <p>湿度：{{ $weather['main']['humidity'] }} %</p>
    <p>風速：{{ $weather['wind']['speed'] }} m/s</p>
</div>
@endsection
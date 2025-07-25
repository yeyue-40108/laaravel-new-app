@extends('layouts.app')

@section('content')
<div class="mb-4">
    <section class="flex justify-around my-4 mx-4">
        <a href="{{ route('posts.own') }}" class="border-green-600 rounded hover:opacity-75">
            <h2 class="font-bold text-lg my-5 ml-5">今週の気分</h2>
        </a>
        <a href="{{ route('weather.index') }}" class="border-green-600 rounded hover:opacity-75">
            <h2 class="font-bold text-lg my-5 ml-5">今週の天気</h2>
        </a>
    </section>
    <hr class="border-green-800">
    <section class="my-4">
        <h1 class="font-bold text-xl">人気の投稿</h1>
    </section>
    <hr class="border-green-800">
    <section class="my-4">
        <h1 class="font-bold text-xl">人気のタグ</h1>
    </section>
</div>
@endsection
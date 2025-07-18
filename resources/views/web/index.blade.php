@extends('layouts.app')

@section('content')
<div class="grid grid-cols-6 gap-4">
    <section class="col-start-2 col-span-4 flex justify-between my-4">
        <a href="{{ route('posts.own') }}" class="flex-1 border border-green-600 mr-4 rounded hover:opacity-75">
            <h2 class="font-bold text-lg my-5 ml-5">今週の気分</h2>
        </a>
        <a href="{{ route('weather.index') }}" class="flex-1 border border-green-600 ml-4 rounded hover:opacity-75">
            <h2 class="font-bold text-lg my-5 ml-5">今週の天気</h2>
        </a>
    </section>
    <section class="col-start-2 col-span-4 my-4">
        <h1 class="font-bold text-xl">人気の投稿</h1>
    </section>
    <section class="col-start-2 col-span-4 my-4">
        <h1 class="font-bold text-xl">人気のタグ</h1>
    </section>
</div>
@endsection
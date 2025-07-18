@extends('layouts.app')

@section('content')
<div>
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-2">
            <a href="{{ route('top') }}" class="hover:underline">トップ</a>
            <span> > </span>
            <a>投稿一覧</a>
        </div>
        <h1 class="col-start-2 text-3xl">投稿一覧</h1>
    </div>
</div>
@endsection
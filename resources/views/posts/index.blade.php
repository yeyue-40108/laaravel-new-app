@extends('layouts.app')

@section('content')
<div>
    <div class="mb-4">
        <div class="mb-3">
            <a href="{{ route('top') }}" class="hover:underline">トップ</a>
            <span> > </span>
            <a>投稿一覧</a>
        </div>
        <h1 class="text-3xl mb-3">投稿一覧</h1>
    </div>
</div>
@endsection
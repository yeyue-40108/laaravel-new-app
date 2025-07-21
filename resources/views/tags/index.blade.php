@extends('layouts.app')

@section('content')
<div>
    <div class="mb-4">
        <div class="mb-3">
            <a href="{{ route('top') }}" class="hover:underline">トップ</a>
            <span> > </span>
            <a>タグ一覧</a>
        </div>
        <h1 class="text-3xl mb-3">タグ一覧</h1>
        <hr class="mb-3">
        <!-- タグ追加ボタン -->
        <!-- 検索欄 -->
        <!-- タグ一覧表示 -->
    </div>
</div>
@endsection
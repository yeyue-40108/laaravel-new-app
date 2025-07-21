@extends('layouts.app')

@section('content')
<div>
    <div class="mb-4">
        <div class="mb-3">
            <a href="{{ route('top') }}" class="hover:underline">トップ</a>
            <span> > </span>
            <a href="{{ route('tags.index') }}" class="hover:underline">タグ一覧</a>
            <span> > </span>
            <a>自分のタグ</a>
        </div>
        <h1 class="text-3xl mb-3">自分のタグ</h1>
        <hr class="mb-3">
        <!-- 自分のタグ+保存したタグ表示 -->
    </div>
</div>
@endsection
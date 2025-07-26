@extends('layouts.app')

@section('content')
<div class="mb-4">
    <div class="mb-3">
        <button type="button" class="hover:underline" onclick="history.back()">< 戻る</button>
    </div>
    <h1 class="text-3xl mb-3">投稿作成</h1>
    <hr class="mb-3">
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
                <div class="flex items-center gap-2">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <input type="text" id="title" name="title" value="{{ old('title') }}" class="form_frame" placeholder="タイトル" autofocus>
            </div>
            <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
                <div class="flex items-center gap-2">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <textarea name="content" id="content" class="form-frame" placeholder="内容">{{ old('content') }}</textarea>
            </div>
            <!-- 気分 -->
            <!-- 体調 -->
            <!-- タグ（複数選択可） -->
            <!-- 公開設定 -->
        </form>
    </div>
</div>
@endsection
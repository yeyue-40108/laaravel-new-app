@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mb-4">
    <h1 class="text-3xl mb-3">ログイン</h1>
    <hr class="mb-4">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="email" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">メールアドレス</label>
            <input type="email" id="email" name="email" class="form_frame flex-1" autofocus>
            @error ('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="password" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">パスワード</label>
            <input type="password" id="password" name="password" class="form_frame flex-1">
            @error ('password')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <hr class="my-4">
        <div class="text-center">
            <button type="submit" class="btn bg-green-600 hover:bg-green-200 py-2 px-4 rounded">ログイン</button>
        </div>
    </form>
    <div class="text-center mt-4">
        <a href="{{ route('register') }}" class="hover:underline">会員登録画面へ</a>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div>
    <div class="mb-4">
        <h1 class="text-3xl mb-3">ログイン</h1>
        <hr class="mb-3">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email">
                @error ('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password">
                @error ('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <hr class="mb-3">
            <button type="submit" class="btn bg-green-600 hover:bg-green-200 py-2 px-2 mx-2 rounded text-center">ログイン</button>
        </form>
        <a href="{{ route('register') }}" class="text-center mt-3">会員登録画面へ</a>
    </div>
</div>
@endsection
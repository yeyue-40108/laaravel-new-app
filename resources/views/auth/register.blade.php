@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mb-4">
    <h1 class="text-3xl mb-3">会員登録</h1>
    <hr class="mb-4">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="name" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">ユーザー名</label>
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form_frame" autofocus>
                @error ('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="email" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">メールアドレス</label>
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form_frame">
                @error ('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="prefecture" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">都道府県</label>
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <button type="disabled" class="bg-green-400 text-white text-sm px-1">任意</button>
                </div>
                <select id="prefecture" name="prefecture" class="form_frame">
                    <option value="">選択してください</option>
                    @foreach ($prefectures as $prefecture)
                        <option value="{{ $prefecture }}" @selected(old('prefecture') == $prefecture)>{{ $prefecture }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="password" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">パスワード</label>
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <input type="password" id="password" name="password" class="form_frame">
                @error ('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="password-confirm" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">パスワード確認</label>
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <input type="password" id="password-confirm" name="password_confirmation" class="form_frame">
                @error ('password_confirmation')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <button type="submit" class="btn bg-green-600 hover:bg-green-200 py-2 px-4 rounded">会員登録</button>
        </div>
    </form>
    <div class="text-center mt-4 flex justify-around">
        <a href="{{ route('top') }}" class="hover:underline">< トップページへ</a>
        <a href="{{ route('login') }}" class="hover:underline">< ログイン画面へ</a>
    </div>
</div>
@endsection
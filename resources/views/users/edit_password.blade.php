@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mb-4">
    <div class="mb-3">
        <a href="{{ route('top') }}" class="hover:underline">トップ</a>
        <span> > </span>
        <a href="{{ route('users.mypage') }}" class="hover:underline">マイページ</a>
        <span> > </span>
        <a>パスワードの変更</a>
    </div>
    <h1 class="text-3xl mb-3">パスワードの変更</h1>
    <hr class="mb-4">
    <form action="{{ route('users.update_password') }}" method="POST">
        @csrf
        @method('PUT')
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
            <button type="submit" class="btn bg-green-600 hover:bg-green-200 py-2 px-4 rounded">変更</button>
        </div>
    </form>
    <div class="text-center mt-4">
        <a href="{{ route('users.mypage') }}" class="hover:underline">< マイページへ戻る</a>
    </div>
</div>
@endsection
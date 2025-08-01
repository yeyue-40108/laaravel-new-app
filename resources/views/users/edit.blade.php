@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mb-4">
    <div class="mb-3">
        <a href="{{ route('top') }}" class="hover:underline">トップ</a>
        <span> > </span>
        <a href="{{ route('users.mypage') }}" class="hover:underline">マイページ</a>
        <span> > </span>
        <a>会員情報の変更</a>
    </div>
    <h1 class="text-3xl mb-3">会員情報の変更</h1>
    <hr class="mb-4">
    <form action="{{ route('users.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4 flex flex-col sm:flex-row sm:items-center">
            <label for="name" class="sm:w-32 mb-1 sm:mb-0 text-lg shrink-0">ユーザー名</label>
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <button type="disabled" class="bg-red-400 text-white text-sm px-1">必須</button>
                </div>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="form_frame" autofocus>
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
                <input type="email" id="email" name="email" value="{{ $user->email }}" class="form_frame">
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
                        <option value="{{ $prefecture }}" {{ old('prefecture', $user->prefecture ?? '') === $prefecture ? 'selected' : ''}}>{{ $prefecture }}</option>
                    @endforeach
                </select>
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
@extends('layouts.app')

@section('content')
<div class="mb-4">
    <div class="mb-3">
        <a href="{{ route('top') }}" class="hover:underline">トップ</a>
        <span> > </span>
        <a>マイページ</a>
    </div>
    <h1 class="text-3xl mb-3">マイページ</h1>
    <hr class="mb-3">
    @if (session('flash_message'))
        <p>{{ session('flash_message') }}</p>
    @endif
    <div class="m-4 p-3 border-gray-500 shadow rounded">
        <a href="{{ route('posts.own') }}" class="hover:opacity-75">
            <h2>自分の投稿</h2>
        </a>
    </div>
    <div class="m-4 p-3 border-gray-500 shadow rounded">
        <a href="{{ route('posts.favorite') }}" class="hover:opacity-75">
            <h2>保存した投稿</h2>
        </a>
    </div>
    <div class="m-4 p-3 border-gray-500 shadow rounded">
        <a href="{{ route('tags.own') }}" class="hover:opacity-75">
            <h2>自分のタグ</h2>
        </a>
    </div>
    <div class="m-4 p-3 border-gray-500 shadow rounded">
        <a href="{{ route('users.edit') }}" class="hover:opacity-75">
            <h2>会員情報の変更</h2>
        </a>
    </div>
    <div class="m-4 p-3 border-gray-500 shadow rounded">
        <a href="{{ route('users.edit_password') }}" class="hover:opacity-75">
            <h2>パスワードの変更</h2>
        </a>
    </div>
    <div class="m-4 p-3 border-gray-500 shadow rounded">
        <form action="{{ route('users.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="hover:opacity-75">退会</button>
        </form>
    </div>
</div>
@endsection
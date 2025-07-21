<div class="mx-20">
    <a href="{{ route('top') }}" class="col-start-2 col-span-4">GOKIGEN</a>
    @auth
        <div class="flex justify-end">
            <a href="#" class="mx-2">マイページ</a>
            <a href="{{ route('logout') }}" class="mx-2">ログアウト</a>
        </div>
    @else
        <div class="flex justify-end">
            <a href="{{ route('register') }}" class="mx-2">会員登録</a>
            <a href="{{ route('login') }}" class="mx-2">ログイン</a>
        </div>
    @endauth
</div>

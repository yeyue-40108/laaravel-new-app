<div class="mx-20">
    <div class="flex justify-between">
        <div class="flex">
            <a href="{{ route('top') }}" class="font-bold text-xl">GOKIGEN</a>
            <div class="flex ml-5">
                <a href="{{ route('posts.index') }}" class="hover:text-white mx-2">POST</a>
                <a href="{{ route('weather.index') }}" class="hover:text-white mx-2">WEATHER</a>
                <a href="#" class="hover:text-white mx-2">TAG</a>
            </div>
        </div>
        @auth
            <div class="flex">
                <a href="{{ route('users.mypage') }}" class="mx-2 hover:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    マイページ
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="mx-2 hover:text-white flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        ログアウト
                    </button>
                </form>
            </div>
        @else
            <div class="inline-block">
                <a href="{{ route('register') }}" class="mx-2 hover:text-white">会員登録</a>
                <a href="{{ route('login') }}" class="mx-2 hover:text-white">ログイン</a>
            </div>
        @endauth
    </div>
</div>

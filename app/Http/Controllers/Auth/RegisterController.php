<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $prefectures = config('prefectures');

        return view('auth.register', compact('prefectures'));
    }

    public function register(Request $request)
    {   
        // リクエストのデータを検証する
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'prefecture' => ['nullable', Rule::in(config('prefectures'))],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // 新しいユーザーを作成する
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'prefecture' => $request->prefecture,
            'password' => Hash::make($request->password),
        ]);

        // ユーザー登録イベントを発行する
        event(new Registered($user));

        // ユーザーをログインさせる
        Auth::login($user);

        // トップページにリダイレクトする
        return redirect()->route('top');
    }
}

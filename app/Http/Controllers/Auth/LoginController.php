<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // リクエストのデータを検証
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 認証を試みる
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // 認証に成功したらセッションを再生成
            $request->session()->regenerate();
            // トップページにリダイレクト
            return redirect()->route('top');
        }

        // 認証に失敗したらログインページにリダイレクト
        return back()->withErrors ([
            'email' => 'ログイン情報が正しくありません。',
        ])->onlyInput('email');
    }
}

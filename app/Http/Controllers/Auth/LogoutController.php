<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // ユーザーをログアウトさせる
        Auth::logout();

        // セッションを無効にする
        $request->session()->invalidate();

        // 新しいCSRFトークンを再生成する
        $request->session()->regenerateToken();

        // トップページにリダイレクトする
        return redirect()->route('top');
    }
}

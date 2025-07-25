<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function mypage() {
        return view('users.mypage');
    }

    public function edit() {
        $prefectures = config('prefectures');
        $user = Auth::user();
        return view('users.edit', compact('prefectures', 'user'));
    }

    public function update(Request $request) {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'prefecture' => ['nullable', Rule::in(config('prefectures'))],
        ]);

        $data = $request->only(['name', 'email', 'prefecture']);
        $user->update($data);

        return redirect()->route('users.mypage')->with('flash_message', '会員情報を変更しました。');
    }

    public function edit_password() {
        return view('users.edit_password');
    }

    public function update_password(Request $request) {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Auth::user();
        $data = $request->only('password');
        $user->update($data);

        return redirect()->route('users.mypage')->with('flash_message', 'パスワードを変更しました。');
    }

    public function destroy(User $user) {
        Auth::user()->delete();

        return redirect()->route('top')->with('flash_message', '退会しました。');
    }
}

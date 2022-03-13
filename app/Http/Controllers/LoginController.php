<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'login' => ['required', 'string', 'max:30', 'exists:users,login'],
            'password' => ['required', 'string', 'min:6', 'max:40'],
        ]);

        if(auth()->attempt($validated)) {
            return redirect()->intended('/')->with('success', 'Теперь вы в аккаунте');
        }

        return redirect()->back()->withErrors([
            'login-error' => 'Пользователь не найден',
        ]);
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}

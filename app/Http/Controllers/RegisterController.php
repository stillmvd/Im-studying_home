<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'identity' => ['required', 'string', 'max:30'],
            'login' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'max:30', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', 'min:6', 'max:40'],
            'agreement' => ['required'],
        ]);

        if($user = User::create($validated)) {
            auth()->login($user);
            return redirect('/')->with('success', 'Регистрация прошла успешно');
        }
        
        return redirect()->back()->withErrors([
            'register-error' => 'Ошибка регистрации',
        ]);
    }
}

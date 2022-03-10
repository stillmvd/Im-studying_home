<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if(auth()->check()) {
            return redirect('user');
        }

        return view('login.index');
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'login' => ['required', 'string', 'max:30'],
            'password' => ['required', 'min:6', 'max:40'],
        ]);
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'identity' => ['required', 'string', 'max:30'],
            'login' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'max:30', 'email'],
            'password' => ['required', 'string', 'confirmed', 'min:6', 'max:40'],
            'agreement' => ['required'],
        ]);

        return redirect()->route('user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'login' => ['required', 'string', 'max:30'],
            'password' => ['required', 'min:6', 'max:40'],
        ]);
        
        return redirect()->route('user');
    }
}

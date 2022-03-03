<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function store(Request $request) {
        $data = $request->all();

        $login = $request->input('login');
        $password = $request->input('password');
        $remember = $request->boolean('remember');

        dd($login, $password);
    }
}

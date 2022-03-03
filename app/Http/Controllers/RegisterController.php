<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        $data = $request->all();

        $identity = $request->input('identity');
        $login = $request->input('login');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordconfirmation = $request->input('password-confirmation');
        $agreement = $request->boolean('agreement');

        dd($identity, $login, $email, $password, $passwordconfirmation, $agreement);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {

        $this->data['header'] = 'Login';

        return view('login.form', $this->data);
    }

    public function confirm(LoginRequest $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {

            return redirect()->intended('dashboard');
        } else {

            return redirect()->route('login')->withErrors('message', 'Invalid username and password');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to('login');
    }
}

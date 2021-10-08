<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showFormLogin()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return 'trang home cua em dau ?';
        } else {
            session()->flash('error-login', 'Tài khoản không tồn tại');
            return back();
        }
    }

    function showFormRegister()
    {
        return view('auth.register');
    }
}

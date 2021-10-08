<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    function showFormLogin()
    {
        return view('auth.login');
    }

    function login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            dd(1);
        } else {
            session()->flash('error-login', 'Tài khoản không tồn tại');
            return back();
        }
    }

    function showFormRegister()
    {
        return view('auth.register');
    }

    function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();

        Session::flash('success', 'Đăng ký thành công');
        return redirect()->route('auth.formLogin');
    }
}

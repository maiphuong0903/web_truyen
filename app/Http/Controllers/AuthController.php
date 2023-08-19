<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where([
            'email' => $request->email,
            'password' => md5($request->password)
        ])->first();

        if ($user) {
            session(['userName' => $user->name]);
            if ($user->role) {
                return redirect()->route('admin_dashboard');
            } else {
                return redirect()->route('home');
            }
        } else {
            return view('login')->with('errorMsg', 'Sai tài khoản hoặc mật khẩu.');
        }
    }
}

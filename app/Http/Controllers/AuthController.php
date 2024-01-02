<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Token;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->email) {
            $request->validate([
                'email' => 'required|email|unique:users,email|regex:/^[^\.].*[^\.]@.*\.com$/i',
                'password' => 'required|between:5,20',
                'username' => 'required|unique:users,username',
            ]);

            User::create([
                'email'     => $request->email,
                'password'  => bcrypt($request->password),
                'username'  => $request->username,
            ]);

            return redirect()->route('login')->with('success', 'Registration successful!');
        }else{
            return view('register');
        }
    }

    public function login(Request $request)
    {

        if ($request->email) {
            $user = User::where('email', $request->email)->first();

            if ($user) {
                if (password_verify($request->password, $user->password)) {
                    session(['login' => true]);
                    session(['id' => $user->id]);
                    session(['email' => $user->email]);
                    session(['username' => $user->username]);
                    return redirect()->intended('/');
                } else {
                    return redirect()->route('login')->withErrors(['password' => 'Password salah'])->withInput();
                }
            } else {
                return redirect()->route('login')->withErrors(['email' => 'Email tidak ditemukan'])->withInput();
            }
        }else{
            return view('login');
        }
    }

    public function logout()
    {
        session()->forget('login');
        session()->forget('id');
        session()->forget('email');
        session()->forget('username');
        return redirect()->route('login');
    }

}
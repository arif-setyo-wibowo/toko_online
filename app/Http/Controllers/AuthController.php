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
                'username'  => strtolower(str_replace(' ', '', $request->username)),
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
                    echo "cok";
                    // return redirect()->route('login')->withErrors(['password' => 'Password salah'])->withInput();
                }
            } else {
                echo "cok";
                // return redirect()->route('login')->withErrors(['email' => 'Email tidak ditemukan'])->withInput();
            }
        }else{
            return view('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
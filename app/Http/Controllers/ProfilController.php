<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function index() {
        $data = [
            'profil' => User::where('email', session()->get('email'))->first()
        ];

        return view('profile',$data);
    }

    public function updateName(Request $request) {
        $user = User::find(session()->get('id'));
        $user->username = $request->username;
        $user->save();

        return redirect()->route('profil');
    }

    public function updateBirth(Request $request) {
        $user = User::find(session()->get('id'));
        $user->dob = $request->dob;
        $user->save();

        return redirect()->route('profil');
    }

    public function updateGender(Request $request) {
        $user = User::find(session()->get('id'));
        $user->gender = $request->gender;
        $user->save();

        return redirect()->route('profil');
    }

    public function updateEmail(Request $request) {
        $user = User::find(session()->get('id'));
        $user->email = $request->email;
        $user->save();
        session(['email' => $request->email]);

        return redirect()->route('profil');
    }

    public function updatePhone(Request $request) {
        $user = User::find(session()->get('id'));
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('profil');
    }
}
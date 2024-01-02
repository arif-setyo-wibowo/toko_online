<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rekening;
use App\Models\Alamat;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index() {
        $data = [
            'profil' => User::where('email', session()->get('email'))->first(),
            'rekening' => Rekening::where('users_id', session()->get('id'))->get(),
            'alamat' => Alamat::where('users_id', session()->get('id'))->get()
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

    public function updatePhoto(Request $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $randomName = uniqid() . '.' . $file->getClientOriginalExtension();

            $filePath = $file->storeAs('uploads', $randomName, 'public');

            $user = User::find(session()->get('id'));
            $user->image = $filePath;
            $user->save();

            return response()->json(['message' => 'File berhasil diunggah', 'file_path' => $filePath], 200);
        }

        return response()->json(['message' => 'Tidak ada file yang dikirim'], 400);
    }

    public function insertRekening(Request $request) {
        Rekening::create([
            'users_id'      => session()->get('id'),
            'nama_bank'     => $request->nama_bank,
            'no_rekening'   => $request->no_rekening,
            'nama_pemilik'  => $request->nama_pemilik,
        ]);

        return redirect()->route('profil');
    }

    public function deleteRekening($id)
    {
        $rekening = Rekening::findOrFail($id);
        $rekening->delete();

        return redirect()->route('profil');
    }

    public function insertAlamat(Request $request) {
        Alamat::create([
            'users_id'      => session()->get('id'),
            'nama_alamat'   => $request->nama_alamat,
            'pemilik_alamat'=> $request->pemilik_alamat,
            'alamat'        => $request->alamat,
        ]);

        return redirect()->route('profil');
    }

    public function updateAlamat(Request $request) {
        $dataAlamat = Alamat::find($request->id);

        $dataAlamat->nama_alamat = $request->nama_alamat;
        $dataAlamat->pemilik_alamat = $request->pemilik_alamat;
        $dataAlamat->alamat = $request->alamat;
        $dataAlamat->save();

        return redirect()->route('profil');
    }
}
<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Siap\Pegawai;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // $password = '123';
        // $hashedPassword = password_`hash($password, PASSWORD_BCRYPT);
        // echo $hashedPassword;
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $username = 'tester';
        $akunLogin = Pegawai::where('pengguna', $username)->first();

            // dd($akunLogin);
        if ($akunLogin->id) {
            $loginAttempt = Auth::loginUsingId($akunLogin->id);
            if ($loginAttempt) {
                session(['nama' => $akunLogin->nama]);
                session(['nip' => $akunLogin->nip]);
                session(['golongan' => $akunLogin->golongan]);
                session(['id_satker' => $akunLogin->id_satker]);
                session(['informal_photo_name' => $akunLogin->informal_photo_name]);
                session(['satker' => $akunLogin->nama_satker]);
                return redirect()->route('admin.index');
            } else {
                // Jika login gagal
                dd('Login failed');
                return back()->withErrors([
                    'username' => 'Failed to login using provided credentials.',
                ])->onlyInput('username');
            }
        }
    }



}

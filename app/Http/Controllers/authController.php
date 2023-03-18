<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Masuk'
        ]);
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'username_15483' => 'required',
            'password_15483' => 'required|min:8',
        ]);

        $creds = [
            'username_15483' => $request->username_15483,
            'password_15483' => $request->password_15483,
        ];

        if ($request->role == "petugas") {
            if (Auth::guard('petugas')->attempt($creds)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        } else {
            if (Auth::guard('admin')->attempt($creds)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        toast("Username atau Password Salah", 'error');
        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else {
            Auth::guard('petugas')->logout();
        }

        toast('Berhasil Melakukan Logout', 'success');
        return redirect()->route('login');
    }
}

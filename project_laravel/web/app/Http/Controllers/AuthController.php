<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login'); // Memanggil resources/views/login.blade.php
    }

    // Memproses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->intended('/dashboard'); // Arahkan ke dashboard
        }

        // Jika gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika login berhasil
            return redirect()->route('dashboard'); // Ganti dengan halaman tujuan setelah login
        } else {
            // Jika login gagal
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }
    }

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menangani pendaftaran
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan pengguna baru ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah pendaftaran
        Auth::login($user);

        return redirect()->route('dashboard'); // Ganti dengan halaman tujuan setelah login
    }
}

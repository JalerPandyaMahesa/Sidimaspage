<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Logins;

class LoginsController extends Controller
{
    public function showLoginForm()
    {
        return view('login');  // Tampilan form login
    }

    public function login(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Ambil data user yang login
        $user = Auth::user();

        // Simpan informasi user ke dalam session
        session([
            'username' => $user->username,
            'email' => $user->email,
        ]);

        // Redirect jika login berhasil
        return redirect()->intended('admin');
    }

    // Redirect jika login gagal
    return back()->withErrors([
        'username' => 'Username atau password salah.',
    ])->withInput();
}


    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        Logins::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashing password
        ]);

        return redirect()->route('login')->with('success', 'User registered successfully');
    }

    public function logout()
{
    session()->flush();

    Auth::logout();
    return redirect('/login');
}

}

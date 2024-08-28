<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function process(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if ($user) {
            if (Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();

                // Update kolom last_login
                $user->last_login = now();
                $user->save();

                return redirect()->intended('/admin/dashboard');
            } else {
                // Password salah
                return back()->withInput()->with('pesan', "Password salah");
            }
        } else {
            // Username tidak ditemukan atau salah
            return back()->withInput()->with('pesan', "Login Gagal");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('pesan', 'Logout berhasil');
    }
}

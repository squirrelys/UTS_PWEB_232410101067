<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->input('username'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            session(['username' => $user->username]);

            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->withErrors(['message' => 'Username atau password salah!']);
        }
    }

    public function dashboard(Request $request)
    {
        $username = session('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = session('username', 'Guest');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $reservasi = [
            ['nama' => 'Dinda', 'meja' => 5, 'waktu' => '18:00'],
            ['nama' => 'Sapata', 'meja' => 2, 'waktu' => '19:30'],
            ['nama' => 'keysha', 'meja' => 4, 'waktu' => '20:00'],
        ];

        return view('pengelolaan', compact('reservasi'));
    }

}

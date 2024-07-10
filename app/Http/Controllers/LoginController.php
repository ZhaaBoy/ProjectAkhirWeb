<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function log(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],

        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            alert()->success("{$credentials['email']}", 'Selamat Anda Berhasil Login');
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError', 'LoginFailed');
    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }

// Register
    public function regist()
    {

        return view('regis');
    }

    public function store(Request $request)
    {

        $request->validate([

            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6'],

        ]);

        user::create([

            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),


        ]);

        return to_route('login');
    }
}

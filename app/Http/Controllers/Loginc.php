<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Loginc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.login', [
            'title' => 'Login',
        ]);
    }

    public function index()
    {
        return view('login.login', [
            'title' => 'Login',
        ]);
    }

    public function msuk(Request $req)
    {
        $status = "1";
        $ceklogin = $req->validate([
            'email' => 'required|min:3',
            'password' => 'required'
        ]);

        if (Auth::attempt($ceklogin)) {
            $req->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'login gagal');
    }

    public function kluar()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}

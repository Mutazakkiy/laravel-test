<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registc extends Controller
{
    public function regist()
    {
        return view('login.register', [
            'title' => 'Daftar',
            'active' => 'login'
        ]);
    }

    public function inputNew(Request $req)
    {
        $setatus = "0";
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/')->with('sukses', 'Pendaftaran Behasil, Silahkan Login');
    }
}

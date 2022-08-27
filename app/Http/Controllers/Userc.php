<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Userc extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'title' => 'Users',
            'user' => User::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.user.add', [
            'title' => 'New User'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/user')->with('sukses', 'User berhasil ditambahkan');
    }

    public function show(User $user)
    {
        return view('dashboard.user.detail', [
            'title' => 'Detail',
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'title' => 'Edith',
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ];
        $validasi = $request->validate($rules);
        User::where('id', $user->id)->update($validasi);
        return redirect('/user')->with('sukses', 'User berhasil diubah');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user')->with('sukses', 'User berhasil dihapus!!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {
        // Ambil data pengguna yang terautentikasi
        $user = Auth::user();
        return view('account-profile', compact('user'));
    }

    public function edit()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Pastikan pengguna terautentikasi
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('layouts.edit-profile', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        // Perbarui data pengguna
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        // Cek jika ada gambar baru
        if ($request->hasFile('profile_picture')) {
            // Hapus gambar lama jika ada
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }
            // Simpan gambar baru
            $user->profile_picture = $request->file('profile_picture')->store('profile_pictures');
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        // Verifikasi keberadaan admin dan passwordnya
        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json(['message' => 'Email atau Password salah'], 401);
        }

        // Buat token akses
        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token
        ]);
    }
}
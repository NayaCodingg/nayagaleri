<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('logen.register');
    }

    public function store(Request $request) {
    // Validasi input dari request
    $validatedData = $request->validate([
    'name' => 'required|max:255',
    'username' => ['required', 'min:3', 'max:255', 'unique:users'],
    'email' => 'required|email|unique:users,email', // Sesuaikan dengan kolom yang ada dalam tabel users
    'password' => 'required|min:5|max:255'
]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    try {
        User::create($validatedData);
        return redirect()->route('login');
    } catch (\Exception $e) {
        return back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
    }
}
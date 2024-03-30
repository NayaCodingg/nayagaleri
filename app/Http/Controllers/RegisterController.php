<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('logen.register');
    }

    public function store(Request $request)
    {
        // Validasi input dari request
        $validatedData = $request->validate([
            'Username' => ['required','unique:users'],
            'Password' => ['required'],
            'Email' => ['required','unique:users'], // Sudah sesuai dengan kolom yang ada dalam tabel users
            'NamaLengkap' => ['required'],
            'Alamat' => ['required']
        ]);        
        $validatedData['Password'] = Hash::make($validatedData['Password']);
        try {
            User::create($validatedData);
            return redirect()->route('login');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
        
    }
}

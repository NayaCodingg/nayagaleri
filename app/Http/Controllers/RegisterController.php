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
            'password' => ['required'],
            'email' => ['required','unique:users'],
            'NamaLengkap' => ['required'],
            'Alamat' => ['required']
        ]);
        // @dd($request['password']);
        $validatedData['created_at'] = now();
        $validatedData['password'] = bcrypt($request['password']);
       if ($validatedData){
            User::create($validatedData);
            return redirect()->route('login');
        }
        else {
            return back();
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('logen.login', [
            "active" => "login",
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request) {

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect('page.home);
    }

    // dd($credentials);
    return back();

}

    public function logout() {
        Auth::logout();
        return redirect('logen.login');
    }
}
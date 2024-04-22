<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    $user = User::where('email',$request->email)->where('password',$request->password)->first();
        if(!$user){
            return back()->with('error','email atau password salah !');
        }


        session([
            'id' => $user->id,
        ]);

        return redirect('/');
}

    public function logout() {
        Auth::logout();
        return redirect()->route('page.home');
    }
}

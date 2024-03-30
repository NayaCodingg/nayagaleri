<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    Public function index() {
        return view('logen.forgotpassword');
    }
}

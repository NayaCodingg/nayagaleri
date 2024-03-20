<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    Public function index() {
        return view('page.komentar');
    }
}

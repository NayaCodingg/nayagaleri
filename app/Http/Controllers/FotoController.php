<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    Public function index() {
        return view('page.foto');
    }
}
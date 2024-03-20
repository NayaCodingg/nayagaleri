<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
     Public function index() {
        return view('page.upfoto.upload');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    Public function index() {
        return view('page.upfoto.upload');
    }
}

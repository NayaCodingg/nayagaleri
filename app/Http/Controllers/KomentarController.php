<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index(Request $r){
   $v = $r->validate([
    'userid' => 'required',
    'fotoid' => 'required',
    'cmnt' => 'required'
   ]);

   CommentModel::create($v);
   return back();
    }
}

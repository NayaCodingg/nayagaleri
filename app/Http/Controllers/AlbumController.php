<?php

namespace App\Http\Controllers;

use App\Models\AlbumModel;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    Public function index() {
        return view('page.albums',[
            'foto' => AlbumModel::all(),
        ]);
    }
    Public function detail(AlbumModel $id){
        return view('page.detailfoto',[
            'foto' => $id,
        ]);
    }
}
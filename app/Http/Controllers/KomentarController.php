<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentar = Komentar::all();

        return view('page.komentar', ['komentar' => $komentar]);
    }

    public function store(Request $request, Photo $photo)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Komentar::create([
            'user_id' => Auth::id(),
            'photo_id' => $photo->id,
            'content' => $request->input('content'),
        ]);

        return back();
    }
}

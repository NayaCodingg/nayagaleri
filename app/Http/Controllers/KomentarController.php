<?php

namespace App\Http\Controllers;

use App\Models\Controll;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentar = Komentar::all();

        return view('page.komentar', ['komentar $komentar']);
    }

    public function store(Request $request, foto $foto)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Komentar::create([
            'user_id' => Auth::id(),
            'foto_id' => $foto->id,
            'content' => $request->input('content'),
        ]);

        return back();
    }
}

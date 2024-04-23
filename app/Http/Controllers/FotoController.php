<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Album;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Date;


class FotoController extends Controller
{

    public function foto() {

        $foto = Foto::all();
        return view('page.foto', [
            "active" => "foto",
            "title" => "Photo",
            "foto" => $foto
        ]);
    }

    public function upload()
    {
        return view('page.upfoto.upload', [
            "title" => "Upload"
        ]);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'JudulFoto' => ['required'],
            'DeskripsiFoto' => ['required'],
            'LokasiFile' => ['required'],
        ]);

        $imageName = $request->file('LokasiFile')->hashName();

        $validated['LokasiFile'] = $imageName;

        $fotoDirectory = public_path() . '/foto';
        $request->file('LokasiFile')->move($fotoDirectory, $imageName);
        $validated['TanggalUnggah'] = Date::now();

        Foto::create($validated);

        return redirect()->route('page.foto')->with('success', 'Post Foto Succesfull >y<');
        return redirect()->route('page.foto')->with('error', 'Post Foto Failed :(');
    }


}

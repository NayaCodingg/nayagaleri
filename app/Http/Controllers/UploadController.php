<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function upload()
    {
        return view('page.upfoto.upload', [
            "title" => "Upload"
        ]);
    }

    public function store(Request $request)
    {
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

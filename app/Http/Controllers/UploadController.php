<?php

namespace App\Http\Controllers;

use App\Models\AlbumModel;
use App\Models\Foto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{

    public function upload()
    {
        return view('page.upfoto.upload', [
            "title" => "Upload",
            'albm' => AlbumModel::all(),
        ]);
    }

    public function store(Request $request)
    {
        $imageName = $request->file('LokasiFile');
        if($request->albumid == '0'){
            $request->albumid = null;
        }
        // @dd($request->albumid);
$v = $request->validate([
"LokasiFile" => 'image|required',
]);
if($v['LokasiFile'] = $imageName->store('/photos')){

    $v['TanggalUnggah'] = now();
    $v['albumid'] =  $request->albumid;
    $s = Foto::create($v);
    
return redirect()->route('page.foto')->with('success', 'Post Foto Succesfull >y<');
}
        return redirect()->route('page.foto')->with('error', 'Post Foto Failed :(');
    }
    public function upl_album(Request $r){
        // @dd($r['albumname']);
$v = $r->validate([
    "albumname" => 'string|required',
    'desc' =>'required'
]);
AlbumModel::create($v);
return redirect('/albums');
    }
}

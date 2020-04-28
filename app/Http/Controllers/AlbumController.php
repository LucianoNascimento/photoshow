<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return view('albums.index');
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $nameWitheExtesion = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($nameWitheExtesion,PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $arquivoFoto = $filename .'.'. $extension;
        $image = $request->file('cover_image')->storeAs('public/album_covers',$arquivoFoto);
        return $arquivoFoto;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Foto;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index()
    {
        return view('welcome', ['artikels' => Blog::orderBy('id', 'DESC')->limit(3)->get(), 'fotos' => Foto::orderBy('id', 'DESC')->limit(4)->get()]);
    }

    public function berita()
    {
        return view('berita.list-berita', ['artikels' => Blog::orderBy('id', 'DESC')->get()]);
    }

    public function detail($slug)
    {
        return view('berita.detail-berita', ['artikel' => Blog::where('slug', $slug)->first()]);
    }

    public function gallery()
    {
        return view('foto.list-foto', ['fotos' => Foto::orderBy('id', 'DESC')->get()]);
    }
}

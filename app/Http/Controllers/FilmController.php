<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function detail($kategori){
        $films = Film::where('kategori', $kategori)->get();

        return view('program.program', [
            'films' => $films
        ]);
    }
}

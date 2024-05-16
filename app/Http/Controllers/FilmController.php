<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function detail($id){
        $film = Film::find($id);

        return view('program.program', [
            'film' => $film
        ]);
    }
}

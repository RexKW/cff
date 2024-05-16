<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index(){
        $films = Film::all();

        return view('layouts.template', [
            'films' => $films
        ]);
    }
}

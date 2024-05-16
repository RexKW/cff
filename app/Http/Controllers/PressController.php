<?php

namespace App\Http\Controllers;

use App\Models\Press;
use Illuminate\Http\Request;

class PressController extends Controller
{
    public function index(){
        $presses = Press::all();

        return view('presscenter', [
            'presses' => $presses
        ]);
    }

    public function search(Request $request){
        $validatedData = $request->validate([
            'year' => 'required',
        ]);
    
        if($validatedData['year'] == 'ALL'){
            $presses = Press::all();
        } else {
            $presses = Press::whereYear('date', $validatedData['year'])->get();
        }
        
        return view('presscenter', [
            'presses' => $presses
        ]);
    }
    
}

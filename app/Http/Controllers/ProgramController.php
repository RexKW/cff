<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{   
    public function search(Request $request){
        $validatedData = $request->validate([
            'type' => 'required',
            'date' => 'required',
        ]);

        $programs = Program::where('type', $validatedData['type'])
                            ->where('date', $validatedData['date'])
                            ->get();

        return view('ticketinglist', [
            'programs' => $programs
        ]);
    }
}

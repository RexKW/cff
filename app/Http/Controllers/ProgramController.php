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

        if($validatedData['type'] == 'ALL' && $validatedData['date'] == 'ALL'){
            $programs = Program::all();
        } else if ($validatedData['type'] == 'ALL'){
            $programs = Program::where('date', $validatedData['date'])->get();
        } else if ($validatedData['date'] == 'ALL'){
            $programs = Program::where('type', $validatedData['type'])->get();
        } else {
            $programs = Program::where('type', $validatedData['type'])
                            ->where('date', $validatedData['date'])
                            ->get();
        }
        
        return view('ticketinglist', [
            'programs' => $programs
        ]);
    }
}

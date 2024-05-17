<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $main = Schedule::where('day', 1)->first();

        $schedules = Schedule::all();

        return view('program.schedule', [
            'schedules' => $schedules,
            'main' => $main
        ]);
    }

    public function search($day){
        $main= Schedule::where('day', $day)->first();

        $schedules = Schedule::all();

        return view('program.schedule', [
            'schedules' => $schedules,
            'main' => $main
        ]);
    }
}

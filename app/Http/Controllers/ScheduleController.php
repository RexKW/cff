<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::where('day', 1)->get();

        return view('program.schedule', [
            'schedules' => $schedules
        ]);
    }
}

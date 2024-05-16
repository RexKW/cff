<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'name' => 'Performance by Willas',
            'time' => '19.00-20.00',
            'description' => 'Willas akan Joget',
            'day' => 1
        ]);
        Schedule::create([
            'name' => 'Performance by Willas',
            'time' => '20.00-21.00',
            'description' => 'Willas akan Joget',
            'day' => 1
        ]);
        Schedule::create([
            'name' => 'Performance by Willas',
            'time' => '21.00-22.00',
            'description' => 'Willas akan Joget',
            'day' => 1
        ]);
    }
}

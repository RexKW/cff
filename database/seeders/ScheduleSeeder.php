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
            'day' => '1-3',
            'image' => '/images/Day-1-3.jpg'
        ]);

        Schedule::create([
            'day' => '4-6',
            'image' => '/images/Day-4-6.jpg'
        ]);
    }
}

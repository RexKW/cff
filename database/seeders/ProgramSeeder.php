<?php

namespace Database\Seeders;

use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            'name' => 'Program 1',
            'date' => Carbon::createFromDate(2024, 5, 29),
            'location' => 'XX1 Ciputra World',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'link' => 'www.tiket.com',
            'type' => 'workshop',
            'poster1' => '/images/Poster.jpg',
            'poster2' => '/images/Poster.jpg',
            'poster3' => '/images/Poster.jpg',
        ]);
    }
}

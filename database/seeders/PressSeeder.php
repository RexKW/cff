<?php

namespace Database\Seeders;

use App\Models\Press;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Press::create([
            'title' => 'CIPUTRA FILM FESTIVAL SUKSES BERSINAR SESUAI DENGAN TEMA YANG DIUSUNG',
            'date' => Carbon::createFromDate(2023, 6, 17),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'image' => '/images/Background-1.jpg',
            'link' => 'www.tiket.com',
        ]);

        Press::create([
            'title' => 'WILLAS TOBING MEMUKBANG 2000 TON MAKANAN',
            'date' => Carbon::createFromDate(2023, 6, 17),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'image' => '/images/Background-1.jpg',
            'link' => 'www.tiket.com',
        ]);
    }
}

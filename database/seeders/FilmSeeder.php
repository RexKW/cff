<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::create([
            'judul' => 'Against The Grain',
            'kategori' => 3,
            'sutradara' => 'Vincent Tion Hudaya',
            'trailer' => 'https://youtu.be/5NfypQifr2I?si=LPeYb0RfBv2k20UJ',
            'poster' => '/images/non-kompetisi/Poster-AgainstTheGrain.jpg',
            'deskripsi' => 'Sinopsis : Hanky Purnama, seorang pria berusia 50 tahun masih gemar mengoleksi kostum, mainan, dan komik superhero, padahal superhero dianggap sebagai hobi untuk anak-anak. Hobinya ini mendapat penolakan dari berbagai pihak seperti ibunya dan murid-muridnya. Tetapi, dengan mendapatkan support dari istri, anak, dan keluarganya yang lain, Hanky terus berpegang teguh pada hobinya dan prinsip dari seorang superhero.',
            'tipe' => 'non-kompetisi'
        ]);
    }
}

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
            'judul' => 'Illusion of Delusion',
            'sutradara' => 'Barbie',
            'produser' => 'Barbie',
            'penulis' => 'Barbie',
            'rumah_produksi' => 'Dream House',
            'penghargaan' => 'CFF 2023',
            'trailer' => 'https://www.youtube.com/embed/QV_iPZ1pjQc?si=JnqV5yoG6yPtcy-M',
            'poster' => '/images/Poster.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'tipe' => 'kompetisi'
        ]);

        Film::create([
            'judul' => 'Voice of The Voiceless',
            'sutradara' => 'Barbie',
            'produser' => 'Barbie',
            'penulis' => 'Barbie',
            'rumah_produksi' => 'Dream House',
            'penghargaan' => 'CFF 2023',
            'trailer' => 'https://www.youtube.com/embed/QV_iPZ1pjQc?si=JnqV5yoG6yPtcy-M',
            'poster' => '/images/Poster.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'tipe' => 'kompetisi'
        ]);

        Film::create([
            'judul' => 'Perfectly Imperfect',
            'sutradara' => 'Barbie',
            'produser' => 'Barbie',
            'penulis' => 'Barbie',
            'rumah_produksi' => 'Dream House',
            'penghargaan' => 'CFF 2023',
            'trailer' => 'https://www.youtube.com/embed/QV_iPZ1pjQc?si=JnqV5yoG6yPtcy-M',
            'poster' => '/images/Poster.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'tipe' => 'kompetisi'
        ]);

        Film::create([
            'judul' => 'SOS! Shout Out Surabayans!',
            'sutradara' => 'Barbie',
            'produser' => 'Barbie',
            'penulis' => 'Barbie',
            'rumah_produksi' => 'Dream House',
            'penghargaan' => 'CFF 2023',
            'trailer' => 'https://www.youtube.com/embed/QV_iPZ1pjQc?si=JnqV5yoG6yPtcy-M',
            'poster' => '/images/Poster.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'tipe' => 'kompetisi'
        ]);
    }
}

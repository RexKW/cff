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
            'name' => 'Perfectly Imperfect',
            'date' => Carbon::createFromDate(2024, 5, 28),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Against The Grain (Sutradara : Vincent Tion Hudaya)
            <br>2. Sedia Kala (Sebelum Hujan) (Sutradara : Giannina Trixie Lapian)
            <br>3. The Mind May Lie So The Heart Can Forget (Sutradara : Nicholas Dutavira Sunanto)
            <br>4. When Delia Lost Her Camelia (Sutradara : Ilham Prajatama)
            <br>5. Five Minutes of Love (Sutradara : Daffa Putra Ramadhan)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'non-kompetisi',
            'poster1' => '/images/non-kompetisi/Poster-AgainstTheGrain.jpg',
            'poster2' => '/images/non-kompetisi/PosterSediaKala.jpg',
            'poster3' => '/images/non-kompetisi/Poster-5Minutes.jpg',
        ]);

        Program::create([
            'name' => 'Voice of The Voiceless',
            'date' => Carbon::createFromDate(2024, 5, 28),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Make A Wish (Sutradara : Adventio Diyar)
            <br>2. Mentari Sang Penakluk Global (Sutradara : Ahmad Wildan Pattilouw)
            <br>3. Laila (Sutradara : Bayu Pradityo)
            <br>4. Kotak Amal (Sutradara : Taufan Tohary)
            <br>5. Disparitas (Sutradara : Charlotte Yeung)
            <br>6. Between Above and Below (Sutradara : Alwi Iftikhar)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'non-kompetisi',
            'poster1' => '/images/non-kompetisi/Poster-MakeAWish.jpg',
            'poster2' => '/images/non-kompetisi/Poster-KotakAmal.jpg',
            'poster3' => '/images/non-kompetisi/Poster-Disparitas.jpg',
        ]);

        Program::create([
            'name' => 'Shout Out, Surabayans (SOS)',
            'date' => Carbon::createFromDate(2024, 5, 29),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Renjana (Sutradara : Muhammad Labib Pratama)
            <br>2. Halo, Pulang (Sutradara : Yusuf Jacka Ardana)
            <br>3. Kenangan Konangan (Sutradara : Rosihan Amril Farouqi)
            <br>4. Is-Smile (Sutradara : Achmad Candi)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'non-kompetisi',
            'poster1' => '/images/non-kompetisi/Poster-Renjana.jpg',
            'poster2' => '/images/non-kompetisi/Poster-HaloPulang.jpg',
            'poster3' => '/images/non-kompetisi/Poster-IsSmile.jpg',
        ]);

        Program::create([
            'name' => 'Illusion of Delusion',
            'date' => Carbon::createFromDate(2024, 5, 29),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Klesha (Sutradara : Falah Bilal Putra Candra)
            <br>2. Itu Bukan Dia (Sutradara : Ariq Arsyi)
            <br>3. My Sweet Honey (Sutradara : Bayu Adjie Devasina Getar Alam)
            <br>4. Selamat Berduka Cita (Happy Condolences) (Sutradara : Caesario Arnoldi)
            <br>5. Manrabukka (Sutradara : Syafrida Yusuf Amin)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'non-kompetisi',
            'poster1' => '/images/non-kompetisi/Poster-MSH.jpg',
            'poster2' => '/images/non-kompetisi/Poster-ItuBukanDia.jpg',
            'poster3' => '/images/non-kompetisi/Poster-KLESHA.jpg',
        ]);

        Program::create([
            'name' => 'Kompetisi Fiksi 1',
            'date' => Carbon::createFromDate(2024, 5, 30),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Gaung-Gaung Jemari (Sutradara : Andi Azhari Syarif)
            <br>2. Pajaratan Cinta (Sutradara : Arfi Syabanuari N)
            <br>3. CONQ (Sutradara : Chaila Aura Zahara)
            <br>4. Ketulah (Sutradara : Khoiri Susilo Ginanjar)
            <br>5. The Big Fish in The Small Pond (Sutradara : Rakha Magelhaens R.J.)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'kompetisi',
            'poster1' => '/images/Poster.jpg',
            'poster2' => '/images/Poster.jpg',
            'poster3' => '/images/Poster.jpg',
        ]);

        Program::create([
            'name' => 'Kompetisi Dokumenter',
            'date' => Carbon::createFromDate(2024, 5, 30),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Savior (Sutradara : Bryan Erga Satria)
            <br>2. Rupiah dari Besi Tua (Sutradara : Yoga Mahendra Pratama)
            <br>3. Gulat Okol Brotherhood Rivalry (Sutradara : Tessalonica Gloria Kristiawan)
            <br>4. Celebration: A Bliss Parade (Sutradara : Jonathan Gradiyan)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'kompetisi',
            'poster1' => '/images/Poster-2.jpg',
            'poster2' => '/images/Poster-2.jpg',
            'poster3' => '/images/Poster-2.jpg',
        ]);

        Program::create([
            'name' => 'Focus On WIMAR',
            'date' => Carbon::createFromDate(2024, 5, 31),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Folksong
            <br>2. Shitpost
            <br>3. Susu Macan',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'workshop',
            'poster1' => '/images/Poster.jpg',
            'poster2' => '/images/Poster.jpg',
            'poster3' => '/images/Poster.jpg',
        ]);

        Program::create([
            'name' => 'Kompetisi Fiksi II',
            'date' => Carbon::createFromDate(2024, 5, 31),
            'location' => 'Ciputra World Mall Surabaya',
            'description' => '1. Behind, Behind The Scenes: How To Take A Shoot? (Sutradara : Maulana Ghiffari)
            <br>2. Labirin (Sutradara : Erly Neischa Diva)
            <br>3. Sebelum Aku Terbang (Sutradara : Benefita Diva Putra Wibowo)
            <br>4. Mahakuasa (Sutradara : Kenneth Lisungan)
            <br>5. A Ballad In A Sea Of Rubbish (Sutradara : Bhima Agrastya)',
            'link' => 'https://www.loket.com/event/3rd-ciputra-film-festival-2024-i4g7?fbclid=PAZXh0bgNhZW0CMTEAAaYIZWJnr1PfX9uaYXFiK_jVGhqhdTguBU9jzrG4-Q177bGA-esbzl_0eow_aem_AeHR1zhUjbR-HnRdZThopxkNyJjCFiTPh2N-s-A1x7-eLsTqdZrsP8z1MNCB-R59e75i2_avgR65EmTVclSZoEA0',
            'type' => 'kompetisi',
            'poster1' => '/images/Poster-2.jpg',
            'poster2' => '/images/Poster-2.jpg',
            'poster3' => '/images/Poster-2.jpg',
        ]);
    }
}

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
            'trailer' => 'https://www.youtube.com/embed/5NfypQifr2I?si=LPeYb0RfBv2k20UJ',
            'poster' => '/images/non-kompetisi/Poster-AgainstTheGrain.jpg',
            'deskripsi' => 'Sinopsis : Hanky Purnama, seorang pria berusia 50 tahun masih gemar mengoleksi kostum, mainan, dan komik superhero, padahal superhero dianggap sebagai hobi untuk anak-anak. Hobinya ini mendapat penolakan dari berbagai pihak seperti ibunya dan murid-muridnya. Tetapi, dengan mendapatkan support dari istri, anak, dan keluarganya yang lain, Hanky terus berpegang teguh pada hobinya dan prinsip dari seorang superhero.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Sedia Kala (Sebelum Hujan)',
            'kategori' => 3,
            'sutradara' => 'Giannina Trixie Lapian',
            'trailer' => 'https://www.youtube.com/embed/THqVfBpGtT4?si=jhdyeCYZH0m9rl1i',
            'poster' => '/images/non-kompetisi/PosterSediaKala.jpg',
            'deskripsi' => 'Sinopsis : Kala dan Bayu merupakan sepasang kekasih yang sudah bersama selama kurang lebih tiga tahun. Suatu hari, Bayu hendak pergi ke luar kota dan Kala ingin ikut mengantarnya hingga ke terminal. Sementara Bayu mengepak barang-barangnya, Kala merapikan kaset-kaset yang bertebaran di atas meja kerja mereka sambil memilih beberapa kaset untuk ia berikan kepada Bayu. Kaset-kaset tersebut merupakan susunan lagu yang mereka racik sendiri. Semenjak berpacaran, Bayu dan Kala selalu bepergian sambil mendengarkan lagu dari kaset-kaset itu melalui sebuah Walkman tua.
            <br><br>Kala dan Bayu mulai berangkat ke terminal, tentunya sambil mendengarkan musik dari Walkman. Kala bingung karena ia tidak mengenal lagu-lagu yang sejauh ini diputarkan. Kala akhirnya membuka Walkman untuk melihat label kaset. Kala terkejut melihat label yang tertulis “KENCAN TERAKHIR”. Bayu akhirnya mengakui bahwa ia akan pergi dan tidak akan kembali lagi karena ia hendak memutuskan hubungannya dengan Kala. Kala marah, merasa bahwa kaset yang disusun oleh Bayu ini tidak cukup untuk menjelaskan kenapa hubungan mereka harus berakhir. Dengan penuh emosi ia menekan tombol-tombol yang ada pada Walkman. Ia melakukan terus menerus hingga akhirnya Walkman rusak.
            <br><br>Mereka menepi, Kala menyarankan kembali ke kontrakan untuk memperbaiki Walkman dan menuntut Bayu untuk menjelaskan alasan ia mengakhiri hubungan mereka. Bayu kembali menolak dan mengatakan bahwa jawaban ada di dalam kaset. Ketika sedang memikirkan solusi, Bayu menyadari bahwa mereka berada tak jauh dari tukang reparasi Walkman langganan mereka, Mas Tyo. Mereka akhirnya mengunjungi toko reparasi Mas Tyo.
            <br><br>Sesampainya di toko reparasi, Bayu langsung menyerahkan Walkman ke Mas Tyo untuk diperbaiki. Bayu menghampiri Kala yang sedang duduk dan Kala lagi-lagi mempertanyakan keputusan Bayu untuk meninggalkannya. Bayu dengan terpaksa menjawab pertanyaan-pertanyaan Kala. Meskipun demikian, jawaban Bayu malah membuatnya merasa semakin tidak puas. Walkman selesai direparasi dan mereka harus melanjutkan perjalanan.
            <br><br>Mereka terdiam selama sisa perjalanan, kali ini musik dari kaset Bayu sudah kembali terdengar di telinga. Kali ini, lagu yang diputar membuat Kala sedih. Kala memeluk pinggang Bayu erat menahan tangis. Sampai di terminal, Bayu mulai menurunkan barang-barangnya dari motor, Kala berusaha meyakinkan Bayu untuk tinggal bahkan menawarkan diri untuk ikut pergi bersama Bayu. Bayu tidak menuruti permintaan Kala, ia hanya memeluk Kala singkat sebelum akhirnya masuk ke dalam bus, meninggalkan Kala sendirian. Dalam perjalanan pulang, Kala melanjutkan mendengar musik dari kaset “KENCAN TERAKHIR”. Ia akhirnya menumpahkan air mata yang ia tahan sedari tadi.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'The Mind May Lie So The Heart Can Forget',
            'kategori' => 3,
            'sutradara' => 'Nicholas Dutavira Sunanto dan Ranggalih',
            'trailer' => 'https://www.youtube.com/embed/pML42soEBDM?si=0eP8kvacFPJbOf-W',
            'poster' => '/images/non-kompetisi/Poster-TMMLSTHCF.jpg',
            'deskripsi' => 'Sinopsis : Meski tinggal serumah, ABI (25) dan MADINA (24) berbincang melalui telepon genggam; dimana Madina selalu bersikap jutek terhadap Abi. Merasa tidak dihargai, amarah Abi pun meluap. Madina yang kecewa itu meminta Abi untuk menutup telponnya—seketika Madina hilang dari hadapan nya. Rupanya, suatu insiden kecelakaan merenggut nyawa Madina saat ia sedang menyetir sambil ditelpon oleh Abi yang memarahinya karena pulang malam.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'When Delia Lost Her Camelia',
            'kategori' => 3,
            'sutradara' => 'Ilham Prajatama',
            'trailer' => 'https://www.youtube.com/embed/XMVE3mMs4ws?si=63G8SlC5TD7UHLgP',
            'poster' => '/images/non-kompetisi/Poster-Delia.jpg',
            'deskripsi' => 'Sinopsis : Delia(P/19), seorang gadis dari keluarga sederhana, sangat senang ketika kakaknya, Camelia, memberikan warisan berupa beberapa baju dan barang berharga yang dulunya milik Camelia. Camelia sedang sibuk mempersiapkan diri untuk pernikahannya, termasuk belajar menari tari pagar pengantin. Sementara itu, Delia mencoba pakaian-pakaian yang diberikan oleh Camelia. Di tengah persiapan, ada ketegangan antara Delia dan ayahnya terkait pemakaian pakaian adat. Malam sebelum pernikahan, Camelia berbicara dengan calon suaminya di telepon, meninggalkan Delia merasa kesepian. 
            <br><br>Pada hari pernikahan, suasana rumah sangat sibuk. Camelia dan Delia bersiap-siap, namun ketika pergi, hanya Delia yang kembali bersama orangtuanya. Rumah sepi tanpa kehadiran Camelia. Beberapa hari kemudian, keluarga mencoba beradaptasi dengan kehadiran Camelia yang tak lagi ada. Suasana rumah menjadi sepi dan hampa. Namun, tiba-tiba, mereka mendengar suara mobil dan Camelia bersama suaminya tiba, mengubah suasana menjadi gembira. Mereka bersama-sama menyambut kedatangan Camelia dan suaminya dengan antusias.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Five Minutes of Love',
            'kategori' => 3,
            'sutradara' => 'Daffa Putra Ramadhan',
            'trailer' => 'https://www.youtube.com/embed/CWG5KQFTC_U?si=UgBB8xvs0K4ReOuL',
            'poster' => '/images/non-kompetisi/Poster-5Minutes.jpg',
            'deskripsi' => 'Sinopsis : Ratna (65), perempuan lansia yang masih melajang bertemu dengan Jati (70) di penyebrangan Zebra Cross. Pada momen ketidaksengajaan tersebut, hati Ratna bermekaran saat pertama kali melihat Jati.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Renjana',
            'kategori' => 4,
            'sutradara' => 'Muhammad Labib Pratama',
            'trailer' => 'https://www.youtube.com/embed/CWG5KQFTC_U?si=UgBB8xvs0K4ReOuL',
            'poster' => '/images/non-kompetisi/Poster-Renjana.jpg',
            'deskripsi' => 'Sinopsis : Anak dan orang tua memiliki ikatan khusus, yang tak bisa dirasakan sembarang orang terkecuali anak dan orang tua itu sendiri. Menciptakan kasih sayang pada sebuah hubungan adalah harmonisasi yang harus dijaga antara anak dan orang tua. Dalam hidupnya yang akan tumbuh dan terus berkembang, kasih sayang dari orang tua adalah sebuah pokok penting yang tak boleh luput dari proses tumbuh dan bertumbuhnya si anak. Menuntun, memberikan, membantu menggapaikan adalah sebuah keharusan bagi orang tua, demi mekarnya sebuah bunga, mekar yang sempurna.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Halo, Pulang',
            'kategori' => 4,
            'sutradara' => 'Yusuf Jacka Ardana',
            'trailer' => 'https://www.youtube.com/embed/CWG5KQFTC_U?si=UgBB8xvs0K4ReOuL',
            'poster' => '/images/non-kompetisi/Poster-HaloPulang.jpg',
            'deskripsi' => 'Sinopsis : Zaky (24) harus kembali ke Surabaya setelah 10 tahun lamanya ia tidak kembali dari Jakarta karena ayahnya baru saja meninggal. Namun, saat ia kembali pulang ia tidak merasakan kedekatan dengan keluarganya bahkan ia pun tidak merasa duka akan kepulangan ayahnya. Zaky memiliki hubungan yang tidak baik dengan ibunya hingga ia kembali pulang.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Kenangan Konangan',
            'kategori' => 4,
            'sutradara' => 'Rosihan Amril Farouqi',
            'trailer' => 'https://www.youtube.com/embed/CWG5KQFTC_U?si=UgBB8xvs0K4ReOuL',
            'poster' => '/images/non-kompetisi/Poster-KenanganKonangan.jpg',
            'deskripsi' => 'Sinopsis : Karena penasaran dengan istilah masturbasi, Ali (14) remaja SMP sangat ingin mencoba masturbasi. Dengan cara meminjam laptop dari kakaknya untuk menonton video porno. Namun ia malah terkena internet positif.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Is-Smile',
            'kategori' => 4,
            'sutradara' => 'Achmad Candi',
            'trailer' => 'https://www.youtube.com/embed/CWG5KQFTC_U?si=UgBB8xvs0K4ReOuL',
            'poster' => '/images/non-kompetisi/Poster-KenanganKonangan.jpg',
            'deskripsi' => 'Sinopsis : Film pendek Is Smile mengisahkan kisah inspiratif seorang anak SD bernama Ismail (10 tahun) yang percaya bahwa senyuman memiliki keajaiban untuk menyelesaikan permasalahan dalam kehidupan. Hal ini dibuktikan ketika ayahnya hampir mengalami kecelakaan dengan pengendara motor, Ismail menyaksikan betapa senyuman mampu mencairkan suasana dan menyelamatkan situasi. Di sekolah pun, Ismail menerapkan ajaran ayahnya dengan senyuman yang ia berikan kepada semua orang di sekitarnya. Ia menyadari senyumannya mampu mengatasi masalah dan membawa kebahagiaan untuk orang lain.
            <br><br>Suatu hari, ia bertemu dengan seorang guru matematika yang terkenal galak, tegas, serta skeptis terhadap sebuah senyuman. Meskipun Ismail berusaha keras untuk menghadapi guru itu dengan senyumannya, namun tampaknya hal ini tidak membuahkan hasil. Bersama sahabatnya, Rey, Ismail berusaha semaksimal mungkin untuk membuat guru itu tersenyum dan merasa bahagia. Namun, dalam petualangannya itu tanpa Ismail sadari ia membuat sebuah kesalahan yang menimbulkan guru itu mengingat akan kenangan buruknya di masa lalu.',
            'tipe' => 'non-kompetisi'
        ]);
    }
    
}

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
            'judul' => 'Klesha',
            'kategori' => 1,
            'sutradara' => 'Falah Bilal Putra Candra',
            'trailer' => 'https://www.youtube.com/embed/a4gTNoxaiWo?si=rAZvZg1rZ2NqtkpC',
            'poster' => '/images/non-kompetisi/Poster-KLESHA.jpg',
            'deskripsi' => 'Sinopsis : KARINA (18) mendapati mimpi buruk tentang keluarganya. Karina melihat ibunya WARNI (45) sedang dibunuh oleh entitas yang tidak dikenal. Karina pun mencoba untuk tidak memperdulikan hal itu dan menganggapnya hanya sebuah mimpi. Tiba tiba entitas yang berada di mimpi itu muncul dihadapan Karina. Entitas itu adalah WANITA BERGAUN MERAH. Wanita bergaun merah itu juga mengganggu kehidupan Karina. Karina pun mencoba melawan wanita bergaun merah itu dan berhasil. Ternyata wanita bergaun merah itu hanya sebuah halusinasi dari Karina akibat penyakitnya, yaitu skizofrenia.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Itu Bukan Dia',
            'kategori' => 1,
            'sutradara' => 'Ariq Arsyi',
            'trailer' => 'https://www.youtube.com/embed/szGxAYXRumo?si=Skdk-tnkYaRrw9Ba',
            'poster' => '/images/non-kompetisi/Poster-ItuBukanDia.jpg',
            'deskripsi' => 'Sinopsis : Arini (24) sudah enam bulan lamanya kehilangan sesosok calon suami yang sangat dicintainya. Ia selalu merindukan sosok Gilang setiap hari. Lalu, pada suatu ketika saat Arini memperhatikan foto-foto lamanya, Ia tidak sengaja melihat sebuah foto saat Ia masih kecilnya dengan teman- temannya yang dibelakangnya terdapat sebuah gubuk yang mengingatkannya dengan masa itu. Gubuk yang pernah dijadikan tempat untuk melakukan sebuah “Ritual” pemanggilan Arwah. 
            <br><br>Awalnya Ia mendapat penolakan dari teman – temannya untuk melakukan itu. Namun pada akhirnya, dengan bantuan dua orang temannya yaitu Mila (24) dan Ridho (23), mereka mencoba melakukan sebuah ritual itu. Dengan mengandalkan ingatan  apa saja yang saat itu Ia lihat Arini pun memulai ritualnya.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'My Sweet Honey',
            'kategori' => 1,
            'sutradara' => 'Bayu Adjie Devasina Getar Alam',
            'trailer' => 'https://www.youtube.com/embed/OjUiZy0ZYz8?si=vzHYYvYxuYpI41zY',
            'poster' => '/images/non-kompetisi/Poster-MSH.jpg',
            'deskripsi' => 'Sinopsis : Sam adalah seorang mahasiswa teknik tingkat akhir yang cemerlang dalam akademik dan berasal dari keluarga yang berkecukupan. Ia memiliki hubungan dengan seorang gadis bernama Alma, seorang figur "My Sweet Honey" dalam dirinya. 
            <br><br>Suatu ketika ia mendapati Alma berselingkuh dengan teman dekatnya. Ia patah hati untuk pertama kali. Karena ia adalah seorang yang selalu memendam rasa, Ia mencoba untuk lari dari kenyataan menuju kelamnya dunia hingga tidak dapat membedakan halusinasi dan realita.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Selamat Berduka Cita (Happy Condolences)',
            'kategori' => 1,
            'sutradara' => 'Caesario Arnoldi',
            'trailer' => 'https://www.youtube.com/embed/3FKSNPM7Nuk?si=cvAApySw5Fuzsu1a',
            'poster' => '/images/non-kompetisi/Poster-SelamatBerdukaCita.jpg',
            'deskripsi' => "Sinopsis : After learning of her mother's passing from her sister NILA (26), who was already at the location, LELA (21) is her way to the village for the funeral. A radio broadcast that discusses the possibility of Mount Toba erupting and its connection to the apocalypse accompanied her journey. Arriving at the house of worship for the funeral procession, Nila greeted Lela and invited her to come in. The moment Lela stepped into the room, something changed. An air of threat looms over her as the decorations and the gazes of the entire congregation were immediately focused on Lela.",
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Manrabukka',
            'kategori' => 1,
            'sutradara' => 'Syafrida Yusuf Amin',
            'trailer' => 'https://www.youtube.com/embed/SmQsEb9dmno?si=sU5PdWMenzUrG9p9',
            'poster' => '/images/non-kompetisi/Poster-Manrabbuka.jpg',
            'deskripsi' => "Sinopsis : Husain (19), Bagas (20), dan Daniel (19) sedang pesta minum di tongkrongan biasanya. Mereka mabuk dan tertawa terbahak-bahak. Kemudian dengan keadaan mabuk berat, Bagas mempersilahkan Husain untuk berdiri memberikan ceramah agama. Husain pun berdiri memberikan ceramah dengan melantur sambil memperagakan ayahnya ketika berceramah. Setelah itu, Daniel mengacungkan tangannya memberikan pertanyaan tidak masuk akal yang diikuti pula jawaban Husain yang tidak masuk akal. Lalu mereka tertawa bersama. Setelah itu Bagas ikut bertanya tentang siapa tuhan kamu, kemudian dijawab dengan lantang oleh Husain bahwa tuhannya adalah Allah SWT. Bagas kembali bertanya, lalu meminta Husain menutup mulutnya rapat-rapat saat menjawab pertanyaan tersebut. Ternyata Husain tidak berhasil menjawab, tidak ada kata-kata yang keluar dari mulutnya. Lalu mereka menertawakan hal tersebut. Semakin malam mereka mabuk berat, terlihat Husain tertegun memikirkan impian dia menjadi stand up comedy. Husain membicarakan hal tersebut kepada Bagas dan Daniel, namun mereka justru menertawakannya. Husain pun menangis karena merasa tidak ada yang mendukung segala mimpinya. Akhirnya, Bagas dan Daniel menenangkan Husain dan siap mendukungnya. Husain pun diminta untuk mencoba stand up di depan mereka. Husain berdiri, namun secara tiba-tiba suasana menjadi gelap total, lalu muncul microphone di depannya dan cahaya putih mengarah kepada Husain. Bagas dan Daniel tidak ada di lokasi, hanya terlihat beberapa pocong yang duduk melihat dan siap mendengarkan Husain. Kemudian Husain mulai mencoba untuk melucu, tetapi tidak ada pocong yang tertawa. Semakin lucu pembicaraan Husain mengenai kematian, pocong-pocong tetap tidak ada yang tertawa, kemudian pocong-pocong secara bersamaan mengatakan “manrabbuka” kepada Husain berkali-kali dengan suara dari kecil hingga membesar, dari lambat hingga semakin cepat, dan dari duduk hingga berdiri memutari Husain. Husain pun mencoba menjawab tetapi justru mulutnya hilang tertutup oleh kulitnya sendiri. Pocong-pocong semakin menakutkan bagi Husain, lalu Husain meneteskan air matanya.",
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Mentari Sang Penakluk Gelombang',
            'kategori' => 2,
            'sutradara' => 'Ahmad Wildan Pattilouw',
            'trailer' => 'https://www.youtube.com/embed/n2kVeEeCPXA?si=fEmqWBL9RfUMYo4H',
            'poster' => '/images/non-kompetisi/Poster-Mentari.jpg',
            'deskripsi' => 'Sinopsis : Maluku merupakan Provinsi Kepulauan yang kaya akan rempah-rempah dan Biota Laut, menjadi sumber mata pencaharian masyarakat kepulauan Maluku. Di desa urimessing, kecamatan Nusaniwe (Ambon) terdapat seseorang perempuan yang mandiri dan berani. Dia adalah Mentari Tuhumury, terlahir sebagai satu-satunya anak perempuan dari 6 bersaudara ia justru tidak pernah menunjukan sifat manjanya. Mentari Tuhumury adalah mahasiswa semester akhir pada Program Studi Keperawatan, ia bukan sembarang memilih jurusan tapi karena ia memiliki cita-cita sebagai seorang perawat, walaupun hobi dan keinginan mentari sangat berlawanan dengan jurusan yang ia pilih, bukan alasan untuk dia berhenti melaut dan tidak fokus pada jurusan yang dipilihnya, ia justru bisa melakukannya secara bersamaan. Mentari sudah biasa melaut bermil-mil jauh nya dan ia bisa melaut sendiri dan kadang di temani ayah atau kakaknya. Melaut sudah menjadi hobi bagi mentari sejak usia 7 tahun. Di tengah-tengah kesibukannya sebagai mahasiswa pada semester akhir yang sedang mempersiapkan Skripsi, sembari ia meluangkan waktu untuk melaut dan dari hasil tangkapan yang diperoleh ia gunakan untuk membantu orang tua dan dipakai juga untuk biaya kuliahnya sendiri.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Laila',
            'kategori' => 2,
            'sutradara' => 'Bayo Pradityo',
            'trailer' => 'https://www.youtube.com/embed/nS4OK8oq4Vo?si=JsrT_3LFV00kvT0t',
            'poster' => '/images/non-kompetisi/Poster-Laila.jpg',
            'deskripsi' => 'Sinopsis : Kisah penyandang disabilitas yang rentan terhadap lingkungan sosial dan hanya memiliki perlindungan secara sosial dari orangtua nya. Setelah orangtua meninggal, Laila merasa putus asa sehingga keluarga besar nya memasukan ke panti rehabilitasi sosial sebagai Solusi permasalahan nya. Bangkit dari keterpurukan sepeninggal orangtuanya, Laila tidak pernah berkunjung sekalipun ke makam orang tuanya, sehingga kekuatan itu ada setelah Laila merasa menjadi manusia yang bermanfaat dan mandiri terlepas inklusivitas pada tubuhnya.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Kotak Amal',
            'kategori' => 2,
            'sutradara' => 'Taufan Tohary',
            'trailer' => 'https://www.youtube.com/embed/xbVjrGaq-t0?si=rRup8MYR4rYXc0O4',
            'poster' => '/images/non-kompetisi/Poster-KotakAmal.jpg',
            'deskripsi' => 'Sinopsis : Dua orang sahabat yang juga mantan napi, berjuang untuk tetap istiqamah dalam menjalani kehidupan sebagai "orang baik" dihadapkan persoalan sosial dan rasa lapar di tengah perjalanan mereka.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Disparitas',
            'kategori' => 2,
            'sutradara' => 'Charlotte Yeung',
            'trailer' => 'https://www.youtube.com/embed/rX7zpac1Ols?si=L3r5wdLMgXobFBne',
            'poster' => '/images/non-kompetisi/Poster-Disparitas.jpg',
            'deskripsi' => 'Sinopsis : Pertunjukkan teater tentang dua keluarga dengan kondisi kelas sosial yang berbeda hidup dibawah satu atap, dengan kepala keluarga si miskin menjadi pelayan keluarga kaya. Pelayan dan keluarganya harus bertahan dan berjuang untuk kelangsungan hidupnya dengan pas-pas an dan menahan lapar, sambil melihat keluarga kaya yang hidup dengan berlebihan. Sampai pada puncaknya, si pelayan tidak sanggup melihat keluarganya kelaparan lagi dan berusaha untuk mengambil beberapa sisa makanan dari si keluarga kaya. Namun mirisnya, si keluarga kaya bahkan tidak mau berbagi sisa makanannya, dan membuat pelayan ‘dieksekusi’ berdasarkan suara terbanyak penonton.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Between Above and Below',
            'kategori' => 2,
            'sutradara' => 'Alwi Iftikhar',
            'trailer' => 'https://www.youtube.com/embed/87JXEowSy-c?si=7_SbWi736CAmDE0I',
            'poster' => '/images/non-kompetisi/Poster-BetweenAbove.jpg',
            'deskripsi' => 'Sinopsis : Di tempat antah berantah yang gelap, Gian seorang laki - laki memakai jas rapih duduk di ruang interogasi dengan penjaga yang terlihat misterius. Gian yang terlihat berkeringat ketakutan dengan pertanyaan - pertanyaan dari penjaga, sampai akhirnya penjaga bertanya tentang hal apa yang Gian sesali selama hidupnya. Gian menceritakan bahwa pada akhir hidupnya Gian disangka sebagai penculik Anak kecil bernama Lia yang Ayahnya sering berbuat abusive kepada Lia. Gian disangka seorang penculik sehingga ia dihakimi oleh masyarakat sampai terbunuh. Kasus ini membuat Penjaga kebingungan dalam mendakwa nasib Gian dan akhirnya kasus Gian diserahkan kepada Tuhan.',
            'tipe' => 'non-kompetisi'
        ]);

        Film::create([
            'judul' => 'Make A Wish',
            'kategori' => 2,
            'sutradara' => 'Adventio Diyar',
            'trailer' => 'https://www.youtube.com/embed/veem5DpSfHM?si=5FyDbXwZsqEr9aBL',
            'poster' => '/images/non-kompetisi/Poster-MakeAWish.jpg',
            'deskripsi' => 'Sinopsis : Widarto (24), seorang buruh pabrik kayu yang terkena PHK massal di penghujung tahun, mendengar sebuah mitos tentang domba tahun baru di kampungnya. Konon kabarnya, siapapun yang bisa mendengar domba ternaknya berbicara, akan mendapat keajaiban di tahun berikutnya.
            <br><br>Penasaran akan hal itu, Widarto akhirnya mencoba mengajak ngobrol Arum, domba ternaknya. Segala macam permasalahan hidupnya, dia ceritakan pada Arum. Hingga tepat di detik-detik terakhir pergantian tahun, sesuatu terjadi pada mereka.',
            'tipe' => 'non-kompetisi'
        ]);

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

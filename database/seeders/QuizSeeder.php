<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;


class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         
/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 1: MENGENAL HTML
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 1,
    'question' => 'Apa itu HTML?',
    'option_a' => 'Bahasa pemrograman untuk membuat game',
    'option_b' => 'Bahasa untuk mengatur warna website',
    'option_c' => 'Bahasa untuk menyusun struktur website',
    'option_d' => 'Aplikasi untuk membuat website',
    'correct_answer' => 'c',
]);

// Kuis 2
Quiz::create([
    'level_id' => 1,
    'question' => 'Dalam analogi bangunan, HTML berperan sebagai apa?',
    'option_a' => 'Cat dan dekorasi',
    'option_b' => 'Kerangka bangunan',
    'option_c' => 'Listrik dan lampu',
    'option_d' => 'Pintu otomatis',
    'correct_answer' => 'b',
]);

// Kuis 3
Quiz::create([
    'level_id' => 1,
    'question' => 'Apa tugas utama HTML?',
    'option_a' => 'Membuat website bergerak',
    'option_b' => 'Mengatur tampilan warna',
    'option_c' => 'Menyusun isi dan struktur halaman',
    'option_d' => 'Menyimpan data pengunjung',
    'correct_answer' => 'c',
]);

// Kuis 4
Quiz::create([
    'level_id' => 1,
    'question' => 'Manakah yang BUKAN tugas HTML?',
    'option_a' => 'Menentukan struktur halaman',
    'option_b' => 'Menampilkan teks dan gambar',
    'option_c' => 'Membuat animasi interaktif',
    'option_d' => 'Menyusun konten',
    'correct_answer' => 'c',
]);


/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 2: STRUKTUR DASAR HTML
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 2,
    'question' => 'Dalam analogi bangunan, HTML berperan sebagai apa?',
    'option_a' => 'Dekorasi interior',
    'option_b' => 'Kerangka atau struktur bangunan',
    'option_c' => 'Papan iklan hotel',
    'option_d' => 'Peralatan dapur',
    'correct_answer' => 'b',
]);

// Kuis 2
Quiz::create([
    'level_id' => 2,
    'question' => 'Tag manakah yang mencakup seluruh struktur halaman website?',
    'option_a' => '<body>',
    'option_b' => '<head>',
    'option_c' => '<title>',
    'option_d' => '<html>',
    'correct_answer' => 'd',
]);

// Kuis 3
Quiz::create([
    'level_id' => 2,
    'question' => 'Bagian mana yang berisi konten yang dilihat langsung oleh pengunjung?',
    'option_a' => '<html>',
    'option_b' => '<head>',
    'option_c' => '<body>',
    'option_d' => '<title>',
    'correct_answer' => 'c',
]);

// Kuis 4
Quiz::create([
    'level_id' => 2,
    'question' => 'Jika teks tidak muncul di layar browser, kemungkinan besar teks tersebut diletakkan di mana?',
    'option_a' => 'Di dalam <body>',
    'option_b' => 'Di luar struktur HTML',
    'option_c' => 'Di dalam <head>',
    'option_d' => 'Di dalam <html>',
    'correct_answer' => 'c',
]);


/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 3: TITLE & H1
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 3,
    'question' => 'Di mana teks dari tag <title> ditampilkan?',
    'option_a' => 'Di dalam halaman website',
    'option_b' => 'Di tab browser',
    'option_c' => 'Di dalam body',
    'option_d' => 'Di footer halaman',
    'correct_answer' => 'b',
]);

// Kuis 2
Quiz::create([
    'level_id' => 3,
    'question' => 'Tag manakah yang digunakan sebagai judul utama halaman?',
    'option_a' => '<title>',
    'option_b' => '<head>',
    'option_c' => '<h1>',
    'option_d' => '<html>',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 3,
    'question' => 'Mengapa <title> diletakkan di dalam <head>?',
    'option_a' => 'Karena isinya panjang',
    'option_b' => 'Karena tidak perlu ditampilkan di halaman',
    'option_c' => 'Agar teksnya lebih besar',
    'option_d' => 'Karena wajib satu baris',
    'correct_answer' => 'b',
]);

// Kuis 4
Quiz::create([
    'level_id' => 3,
    'question' => 'Dalam analogi hotel, <h1> diibaratkan sebagai apa?',
    'option_a' => 'Nama hotel di peta',
    'option_b' => 'Papan nama di jalan',
    'option_c' => 'Tulisan besar di lobby',
    'option_d' => 'Buku tamu',
    'correct_answer' => 'c',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 4: TAG PARAGRAF <p>
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 4,
    'question' => 'Apa fungsi utama tag <p>?',
    'option_a' => 'Menampilkan judul utama',
    'option_b' => 'Menulis teks dalam bentuk paragraf',
    'option_c' => 'Menampilkan nama website di tab',
    'option_d' => 'Membuat tombol',
    'correct_answer' => 'b',
]);

// Kuis 2
Quiz::create([
    'level_id' => 4,
    'question' => 'Dalam analogi hotel, tag <p> diibaratkan sebagai apa?',
    'option_a' => 'Papan nama hotel',
    'option_b' => 'Judul di lobby',
    'option_c' => 'Isi brosur hotel',
    'option_d' => 'Denah bangunan',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 4,
    'question' => 'Apa yang terjadi jika Anda menulis dua tag <p> berturut-turut?',
    'option_a' => 'Teks digabung menjadi satu baris',
    'option_b' => 'Teks tidak ditampilkan',
    'option_c' => 'Teks tampil sebagai dua paragraf terpisah',
    'option_d' => 'Website error',
    'correct_answer' => 'c',
]);

// Kuis 4
Quiz::create([
    'level_id' => 4,
    'question' => 'Di mana biasanya tag <p> diletakkan?',
    'option_a' => 'Di dalam <head>',
    'option_b' => 'Di dalam <html>',
    'option_c' => 'Di dalam <body>',
    'option_d' => 'Di luar struktur HTML',
    'correct_answer' => 'c',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 5: HIERARKI HEADING
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 5,
    'question' => 'Apa fungsi utama penggunaan h1 sampai h6?',
    'option_a' => 'Membuat teks berwarna',
    'option_b' => 'Mengatur ukuran font',
    'option_c' => 'Menyusun hierarki informasi',
    'option_d' => 'Menambah animasi',
    'correct_answer' => 'c',
]);

// Kuis 2
Quiz::create([
    'level_id' => 5,
    'question' => 'Tag manakah yang paling penting dalam satu halaman?',
    'option_a' => '<h6>',
    'option_b' => '<h4>',
    'option_c' => '<h2>',
    'option_d' => '<h1>',
    'correct_answer' => 'd',
]);

// Kuis 3
Quiz::create([
    'level_id' => 5,
    'question' => 'Dalam analogi hotel, h2 paling tepat menggambarkan apa?',
    'option_a' => 'Nama hotel',
    'option_b' => 'Area utama seperti lobby atau restoran',
    'option_c' => 'Detail menu makanan',
    'option_d' => 'Catatan kecil',
    'correct_answer' => 'b',
]);

// Kuis 4
Quiz::create([
    'level_id' => 5,
    'question' => 'Manakah penggunaan heading yang benar?',
    'option_a' => 'h1 → h4 → h2',
    'option_b' => 'h1 → h2 → h3',
    'option_c' => 'h3 → h1 → h2',
    'option_d' => 'h2 → h6 → h1',
    'correct_answer' => 'b',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 6: UNORDERED LIST
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 6,
    'question' => 'Tag apa yang digunakan sebagai wadah daftar tanpa nomor?',
    'option_a' => '<li>',
    'option_b' => '<ol>',
    'option_c' => '<ul>',
    'option_d' => '<p>',
    'correct_answer' => 'c',
]);

// Kuis 2
Quiz::create([
    'level_id' => 6,
    'question' => 'Fungsi utama tag <li> adalah?',
    'option_a' => 'Membuat judul',
    'option_b' => 'Membuat paragraf',
    'option_c' => 'Membungkus item di dalam daftar',
    'option_d' => 'Membuat link',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 6,
    'question' => 'Apa yang terjadi jika <li> tidak diletakkan di dalam <ul>?',
    'option_a' => 'Tampil normal',
    'option_b' => 'Website error total',
    'option_c' => 'Struktur menjadi tidak rapi / tidak sesuai standar',
    'option_d' => 'Menjadi judul otomatis',
    'correct_answer' => 'c',
]);

// Kuis 4
Quiz::create([
    'level_id' => 6,
    'question' => 'Kapan sebaiknya menggunakan daftar (list)?',
    'option_a' => 'Saat menulis cerita panjang',
    'option_b' => 'Saat menampilkan informasi yang setara',
    'option_c' => 'Saat menulis judul besar',
    'option_d' => 'Saat menampilkan nama website',
    'correct_answer' => 'b',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 7: ORDERED LIST
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 7,
    'question' => 'Tag HTML apa yang digunakan untuk daftar berurutan?',
    'option_a' => '<ul>',
    'option_b' => '<li>',
    'option_c' => '<ol>',
    'option_d' => '<p>',
    'correct_answer' => 'c',
]);

// Kuis 2
Quiz::create([
    'level_id' => 7,
    'question' => 'Apa fungsi utama <ol>?',
    'option_a' => 'Menampilkan teks tebal',
    'option_b' => 'Membuat daftar tanpa urutan',
    'option_c' => 'Membuat daftar dengan urutan langkah',
    'option_d' => 'Membuat paragraf',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 7,
    'question' => 'Tag apa yang tetap digunakan di dalam <ol>?',
    'option_a' => '<p>',
    'option_b' => '<li>',
    'option_c' => '<ul>',
    'option_d' => '<h1>',
    'correct_answer' => 'b',
]);

// Kuis 4
Quiz::create([
    'level_id' => 7,
    'question' => 'Kapan sebaiknya menggunakan <ol>?',
    'option_a' => 'Saat menampilkan menu makanan',
    'option_b' => 'Saat menulis cerita panjang',
    'option_c' => 'Saat urutan langkah sangat penting',
    'option_d' => 'Saat membuat judul halaman',
    'correct_answer' => 'c',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 8: IMAGE
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 8,
    'question' => 'Tag HTML apa yang digunakan untuk menampilkan gambar?',
    'option_a' => '<picture>',
    'option_b' => '<image>',
    'option_c' => '<img>',
    'option_d' => '<src>',
    'correct_answer' => 'c',
]);

// Kuis 2
Quiz::create([
    'level_id' => 8,
    'question' => 'Atribut apa yang wajib agar gambar bisa muncul?',
    'option_a' => 'alt',
    'option_b' => 'title',
    'option_c' => 'src',
    'option_d' => 'href',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 8,
    'question' => 'Apa fungsi atribut alt?',
    'option_a' => 'Mengatur ukuran gambar',
    'option_b' => 'Memberi deskripsi gambar',
    'option_c' => 'Menghubungkan halaman',
    'option_d' => 'Memberi warna gambar',
    'correct_answer' => 'b',
]);

// Kuis 4
Quiz::create([
    'level_id' => 8,
    'question' => 'Manakah penulisan tag img yang benar?',
    'option_a' => '<img>foto.jpg</img>',
    'option_b' => '<img src="foto.jpg">',
    'option_c' => '<img alt="foto">',
    'option_d' => '<img></img>',
    'correct_answer' => 'b',
]);




/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 9: LINK
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 9,
    'question' => 'Tag HTML apa yang digunakan untuk membuat link?',
    'option_a' => '<link>',
    'option_b' => '<href>',
    'option_c' => '<a>',
    'option_d' => '<url>',
    'correct_answer' => 'c',
]);

// Kuis 2
Quiz::create([
    'level_id' => 9,
    'question' => 'Atribut apa yang menentukan tujuan link?',
    'option_a' => 'src',
    'option_b' => 'target',
    'option_c' => 'href',
    'option_d' => 'alt',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 9,
    'question' => 'Apa fungsi target="_blank"?',
    'option_a' => 'Menutup browser',
    'option_b' => 'Membuka link di tab baru',
    'option_c' => 'Menghapus link',
    'option_d' => 'Mengganti warna link',
    'correct_answer' => 'b',
]);

// Kuis 4
Quiz::create([
    'level_id' => 9,
    'question' => 'Manakah penulisan link yang benar?',
    'option_a' => '<a>google.com</a>',
    'option_b' => '<a href="google.com">',
    'option_c' => '<a href="https://google.com">Google</a>',
    'option_d' => '<href="https://google.com">',
    'correct_answer' => 'c',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 10: MENU NAVIGASI
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 10,
    'question' => 'Apa fungsi utama menu navigasi?',
    'option_a' => 'Menampilkan gambar',
    'option_b' => 'Membantu berpindah antar halaman',
    'option_c' => 'Menyimpan data',
    'option_d' => 'Mengatur warna website',
    'correct_answer' => 'b',
]);

// Kuis 2
Quiz::create([
    'level_id' => 10,
    'question' => 'Tag HTML apa yang digunakan untuk membungkus menu navigasi?',
    'option_a' => '<menu>',
    'option_b' => '<a>',
    'option_c' => '<nav>',
    'option_d' => '<header>',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 10,
    'question' => 'Di dalam <nav>, biasanya berisi apa?',
    'option_a' => 'Gambar',
    'option_b' => 'Paragraf panjang',
    'option_c' => 'Link (<a>)',
    'option_d' => 'Form input',
    'correct_answer' => 'c',
]);

// Kuis 4
Quiz::create([
    'level_id' => 10,
    'question' => 'Menu navigasi umumnya diletakkan di bagian mana?',
    'option_a' => 'Di tengah paragraf',
    'option_b' => 'Di bagian atas halaman',
    'option_c' => 'Di dalam tabel',
    'option_d' => 'Di dalam <head>',
    'correct_answer' => 'b',
]);


/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 11: TABLE
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 11,
    'question' => 'Tag utama untuk membuat tabel adalah?',
    'option_a' => '<grid>',
    'option_b' => '<table>',
    'option_c' => '<td>',
    'option_d' => '<tr>',
    'correct_answer' => 'b',
]);

// Kuis 2
Quiz::create([
    'level_id' => 11,
    'question' => 'Tag apa yang digunakan untuk membuat baris tabel?',
    'option_a' => '<td>',
    'option_b' => '<th>',
    'option_c' => '<tr>',
    'option_d' => '<row>',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 11,
    'question' => 'Apa perbedaan <th> dan <td>?',
    'option_a' => 'Tidak ada perbedaan',
    'option_b' => '<th> untuk gambar, <td> untuk teks',
    'option_c' => '<th> untuk judul, <td> untuk data',
    'option_d' => '<th> hanya untuk CSS',
    'correct_answer' => 'c',
]);

// Kuis 4
Quiz::create([
    'level_id' => 11,
    'question' => 'Kenapa tabel cocok untuk daftar harga?',
    'option_a' => 'Karena warnanya otomatis',
    'option_b' => 'Karena bisa menyusun data baris & kolom',
    'option_c' => 'Karena lebih cepat loading',
    'option_d' => 'Karena wajib di HTML',
    'correct_answer' => 'b',
]);



/*
|--------------------------------------------------------------------------
| QUIZ LEVEL 12: FORM
|--------------------------------------------------------------------------
*/

// Kuis 1
Quiz::create([
    'level_id' => 12,
    'question' => 'Tag apa yang menjadi wadah utama formulir?',
    'option_a' => '<input>',
    'option_b' => '<form>',
    'option_c' => '<label>',
    'option_d' => '<data>',
    'correct_answer' => 'b',
]);

// Kuis 2
Quiz::create([
    'level_id' => 12,
    'question' => 'Tag apa yang digunakan untuk memasukkan teks?',
    'option_a' => '<text>',
    'option_b' => '<field>',
    'option_c' => '<input type="text">',
    'option_d' => '<form>',
    'correct_answer' => 'c',
]);

// Kuis 3
Quiz::create([
    'level_id' => 12,
    'question' => 'Apa fungsi atribut placeholder?',
    'option_a' => 'Menyimpan data',
    'option_b' => 'Menampilkan contoh teks',
    'option_c' => 'Mengirim data',
    'option_d' => 'Menghapus input',
    'correct_answer' => 'b',
]);

// Kuis 4
Quiz::create([
    'level_id' => 12,
    'question' => 'Atribut apa yang memberi nama data input?',
    'option_a' => 'type',
    'option_b' => 'id',
    'option_c' => 'class',
    'option_d' => 'name',
    'correct_answer' => 'd',
]);




    }
}

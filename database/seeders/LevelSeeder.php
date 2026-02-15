<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;
use App\Models\Material;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
 /*
|--------------------------------------------------------------------------
| LEVEL 1: APA ITU HTML?
|--------------------------------------------------------------------------
*/

$level1 = Level::create([
    'title' => 'Materi 1: Mengenal HTML',
    'description' => 'Memahami HTML sebagai fondasi utama sebuah website.',
    'order' => 1,
]);

Material::create([
    'level_id' => $level1->id,
    'title' => 'Website Itu Dibangun, Bukan Sulap',
    'content' => '
        <p>
            Pernah melihat gedung hotel yang megah?
            Sebelum terlihat indah, gedung itu pasti punya <b>kerangka</b>.
        </p>

        <p>
            Website juga begitu. Ia tidak muncul begitu saja.
            Ada struktur yang menyusunnya dari nol.
        </p>

        <p>
            Struktur itulah yang disebut <b>HTML</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level1->id,
    'title' => 'HTML Itu Apa?',
    'content' => '
        <p>
            HTML adalah singkatan dari <b>HyperText Markup Language</b>.
        </p>

        <p>
            Jangan khawatir dengan istilahnya.
            Anggap saja HTML adalah <b>bahasa untuk menyusun kerangka website</b>.
        </p>

        <p>
            HTML tidak membuat website berwarna atau bergerak.
            Tugasnya hanya satu: <b>menyusun isi dan struktur</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level1->id,
    'title' => 'Analogi Bangunan',
    'content' => '
        <p>
            Bayangkan website seperti sebuah bangunan:
        </p>

        <ul>
            <li><b>HTML</b> = kerangka bangunan</li>
            <li>CSS = cat dan dekorasi</li>
            <li>JavaScript = listrik & pintu otomatis</li>
        </ul>

        <p>
            Di level ini, kita hanya fokus ke <b>kerangkanya dulu</b>.
        </p>
    ',
]);


/*
|--------------------------------------------------------------------------
| LEVEL 2: STRUKTUR DASAR HTML
|--------------------------------------------------------------------------
*/

$level2 = Level::create([
    'title' => 'Materi 2: Struktur Dasar HTML',
    'description' => 'Mengenal kerangka dasar sebuah halaman website.',
    'order' => 2,
]);

Material::create([
    'level_id' => $level2->id,
    'title' => 'Kerangka Website',
    'content' => '
        <p>
            Setiap halaman HTML memiliki kerangka dasar.
        </p>

        <p>
            Kerangka ini memberi tahu browser:
            mana bagian kepala, dan mana bagian isi.
        </p>
    ',
]);

Material::create([
    'level_id' => $level2->id,
    'title' => 'Tag html',
    'content' => '
        <p>
            Tag <code>&lt;html&gt;</code> adalah pembungkus utama.
        </p>

        <p>
            Semua kode HTML HARUS berada di dalamnya.
            Tanpa tag ini, browser bisa bingung.
        </p>
    ',
]);

Material::create([
    'level_id' => $level2->id,
    'title' => 'Tag head dan body',
    'content' => '
        <p>
            HTML dibagi menjadi dua bagian utama:
        </p>

        <ul>
            <li><code>&lt;head&gt;</code> → informasi halaman</li>
            <li><code>&lt;body&gt;</code> → isi yang terlihat</li>
        </ul>

        <p>
            Sekarang mari kita lihat contoh nyatanya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Website Pertamaku</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Ini adalah halaman HTML pertama saya.</p>
</body>
</html>
    ')
]);

Material::create([
    'level_id' => $level2->id,
    'title' => 'Apa yang Terjadi Jika Salah Tempat?',
    'content' => '
        <p>
            Jika teks diletakkan di <code>&lt;head&gt;</code>,
            browser <b>tidak akan menampilkannya</b>.
        </p>

        <p>
            Karena browser hanya menampilkan isi
            yang ada di dalam <code>&lt;body&gt;</code>.
        </p>

        <p>
            Coba perhatikan kembali contoh sebelumnya,
            lalu klik <b>Jalankan Kode</b>.
        </p>
    ',
]);


/*
|--------------------------------------------------------------------------
| LEVEL 3: JUDUL HALAMAN & JUDUL KONTEN
|--------------------------------------------------------------------------
*/

$level3 = Level::create([
    'title' => 'Materi 3: Judul Halaman dan Judul Konten',
    'description' => 'Memahami perbedaan judul halaman dan judul yang terlihat di website.',
    'order' => 3,
]);

Material::create([
    'level_id' => $level3->id,
    'title' => 'Judul Itu Ada Dua',
    'content' => '
        <p>
            Dalam sebuah website, ternyata ada <b>dua jenis judul</b>.
        </p>

        <p>
            Seperti hotel:
        </p>

        <ul>
            <li>Nama hotel di papan luar gedung</li>
            <li>Nama hotel di dalam lobby</li>
        </ul>

        <p>
            Keduanya penting, tapi fungsinya berbeda.
        </p>
    ',
]);

Material::create([
    'level_id' => $level3->id,
    'title' => 'Tag title (Judul Halaman)',
    'content' => '
        <p>
            Tag <code>&lt;title&gt;</code> digunakan sebagai judul halaman.
        </p>

        <p>
            Judul ini <b>tidak tampil di layar</b>,
            tapi muncul di tab browser.
        </p>

        <p>
            Anggap saja ini adalah <b>nama hotel di papan luar gedung</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level3->id,
    'title' => 'Tag h1 (Judul Konten)',
    'content' => '
        <p>
            Tag <code>&lt;h1&gt;</code> adalah judul utama
            yang <b>terlihat langsung oleh pengunjung</b>.
        </p>

        <p>
            Ini seperti tulisan besar di lobby hotel.
        </p>
    ',
]);

Material::create([
    'level_id' => $level3->id,
    'title' => 'Contoh Judul Halaman dan Judul Konten',
    'content' => '
        <p>
            Sekarang perhatikan contoh berikut.
        </p>

        <p>
            Coba klik <b>Jalankan Kode</b>,
            lalu perhatikan:
        </p>

        <ul>
            <li>Judul di tab browser</li>
            <li>Judul besar di halaman</li>
        </ul>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Bahagia</title>
</head>
<body>

<h1>Selamat Datang di Hotel Bahagia</h1>
<p>Hotel nyaman untuk liburan keluarga.</p>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 4: PARAGRAF & TEKS
|--------------------------------------------------------------------------
*/

$level4 = Level::create([
    'title' => 'Materi 4: Paragraf dan Teks Konten',
    'description' => 'Menyusun teks agar mudah dibaca oleh pengunjung.',
    'order' => 4,
]);

Material::create([
    'level_id' => $level4->id,
    'title' => 'Kenapa Teks Perlu Paragraf?',
    'content' => '
        <p>
            Bayangkan membaca brosur hotel
            tanpa jarak antar kalimat.
        </p>

        <p>
            Pasti melelahkan, bukan?
        </p>

        <p>
            Di HTML, paragraf membantu
            memisahkan ide agar lebih nyaman dibaca.
        </p>
    ',
]);

Material::create([
    'level_id' => $level4->id,
    'title' => 'Tag p',
    'content' => '
        <p>
            Tag <code>&lt;p&gt;</code> digunakan untuk membuat paragraf.
        </p>

        <p>
            Setiap paragraf akan otomatis
            memiliki jarak dengan paragraf lain.
        </p>
    ',
]);

Material::create([
    'level_id' => $level4->id,
    'title' => 'Contoh Paragraf di Website',
    'content' => '
        <p>
            Perhatikan contoh deskripsi hotel berikut.
        </p>

        <p>
            Setiap paragraf berdiri sendiri
            dan mudah dibaca.
        </p>

        <p>
            Silakan klik <b>Jalankan Kode</b>
            untuk melihat hasilnya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Deskripsi Hotel</title>
</head>
<body>

<h1>Grand Hotel Lux</h1>

<p>
    Grand Hotel Lux adalah hotel mewah
    dengan pemandangan laut yang indah.
</p>

<p>
    Kami menyediakan kamar nyaman,
    restoran bintang lima,
    dan kolam renang eksklusif.
</p>

<p>
    Kenyamanan Anda adalah prioritas kami.
</p>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 5: HIRARKI JUDUL (HEADING)
|--------------------------------------------------------------------------
*/

$level5 = Level::create([
    'title' => 'Materi 5: Hirarki Judul (Heading)',
    'description' => 'Menyusun informasi dari judul besar hingga subjudul.',
    'order' => 5,
]);

Material::create([
    'level_id' => $level5->id,
    'title' => 'Informasi Itu Bertingkat',
    'content' => '
        <p>
            Di hotel, tidak semua tulisan ukurannya sama.
        </p>

        <p>
            Nama hotel lebih besar
            daripada tulisan petunjuk kamar mandi.
        </p>

        <p>
            Website juga seperti itu.
            Informasi disusun dari yang <b>paling penting</b>
            ke yang lebih detail.
        </p>
    ',
]);

Material::create([
    'level_id' => $level5->id,
    'title' => 'Tag Heading (h1 – h6)',
    'content' => '
        <p>
            HTML menyediakan enam tingkat judul:
            dari <code>&lt;h1&gt;</code> sampai <code>&lt;h6&gt;</code>.
        </p>

        <ul>
            <li><code>&lt;h1&gt;</code> → judul utama</li>
            <li><code>&lt;h2&gt;</code> → subjudul</li>
            <li><code>&lt;h3&gt;</code> → bagian lebih kecil</li>
        </ul>

        <p>
            Semakin besar angkanya,
            semakin kecil perannya.
        </p>
    ',
]);

Material::create([
    'level_id' => $level5->id,
    'title' => 'Contoh Struktur Informasi',
    'content' => '
        <p>
            Perhatikan contoh struktur hotel berikut.
        </p>

        <p>
            Judul besar untuk hotel,
            judul lebih kecil untuk fasilitasnya.
        </p>

        <p>
            Klik <b>Jalankan Kode</b>
            dan amati perbedaannya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Struktur Hotel</title>
</head>
<body>

<h1>Grand Hotel Lux</h1>

<h2>Fasilitas Utama</h2>

<h3>Lobby</h3>
<p>Tempat resepsionis dan informasi tamu.</p>

<h3>Restoran</h3>
<p>Menyajikan menu lokal dan internasional.</p>

<h2>Jenis Kamar</h2>

<h3>Standard</h3>
<p>Kamar nyaman untuk dua orang.</p>

<h3>Deluxe</h3>
<p>Kamar luas dengan pemandangan laut.</p>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 6: DAFTAR (LIST)
|--------------------------------------------------------------------------
*/

$level6 = Level::create([
    'title' => 'Materi 6: Daftar Menu dan List',
    'description' => 'Menyusun daftar menggunakan HTML.',
    'order' => 6,
]);

Material::create([
    'level_id' => $level6->id,
    'title' => 'Kenapa Perlu Daftar?',
    'content' => '
        <p>
            Bayangkan menu sarapan hotel
            ditulis dalam satu paragraf panjang.
        </p>

        <p>
            Sulit dibaca, bukan?
        </p>

        <p>
            Untuk itulah HTML menyediakan
            <b>daftar (list)</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level6->id,
    'title' => 'Tag ul dan li',
    'content' => '
        <p>
            Untuk membuat daftar,
            kita menggunakan dua tag:
        </p>

        <ul>
            <li><code>&lt;ul&gt;</code> → pembungkus daftar</li>
            <li><code>&lt;li&gt;</code> → item daftar</li>
        </ul>

        <p>
            Setiap item akan otomatis
            ditampilkan dalam baris terpisah.
        </p>
    ',
]);

Material::create([
    'level_id' => $level6->id,
    'title' => 'Contoh Menu Sarapan',
    'content' => '
        <p>
            Berikut contoh menu sarapan hotel
            yang ditulis menggunakan list.
        </p>

        <p>
            Klik <b>Jalankan Kode</b>
            untuk melihat hasilnya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Menu Sarapan</title>
</head>
<body>

<h1>Menu Sarapan Gratis</h1>

<ul>
    <li>Nasi Goreng Spesial</li>
    <li>Bubur Ayam</li>
    <li>Roti Bakar dan Selai</li>
    <li>Kopi dan Teh</li>
</ul>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 7: DAFTAR BERURUTAN (ORDERED LIST)
|--------------------------------------------------------------------------
*/

$level7 = Level::create([
    'title' => 'Materi 7: Daftar Berurutan (Ordered List)',
    'description' => 'Menyusun langkah atau urutan menggunakan HTML.',
    'order' => 7,
]);

Material::create([
    'level_id' => $level7->id,
    'title' => 'Langkah Itu Ada Urutannya',
    'content' => '
        <p>
            Ada hal-hal yang <b>harus dilakukan berurutan</b>.
        </p>

        <p>
            Contohnya, SOP membersihkan kamar hotel.
            Jika urutannya salah, hasilnya tidak maksimal.
        </p>
    ',
]);

Material::create([
    'level_id' => $level7->id,
    'title' => 'Tag ol dan li',
    'content' => '
        <p>
            Untuk membuat daftar berurutan,
            kita menggunakan:
        </p>

        <ul>
            <li><code>&lt;ol&gt;</code> → daftar berurutan</li>
            <li><code>&lt;li&gt;</code> → item daftar</li>
        </ul>

        <p>
            Browser akan otomatis memberi nomor.
        </p>
    ',
]);

Material::create([
    'level_id' => $level7->id,
    'title' => 'Contoh SOP Housekeeping',
    'content' => '
        <p>
            Berikut contoh SOP membersihkan kamar hotel.
        </p>

        <p>
            Perhatikan urutan langkahnya,
            lalu klik <b>Jalankan Kode</b>.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>SOP Housekeeping</title>
</head>
<body>

<h1>SOP Membersihkan Kamar</h1>

<ol>
    <li>Buka jendela untuk sirkulasi udara</li>
    <li>Rapikan tempat tidur</li>
    <li>Ganti sprei dan sarung bantal</li>
    <li>Bersihkan kamar mandi</li>
    <li>Vacuum lantai</li>
</ol>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 8: GAMBAR DI WEBSITE
|--------------------------------------------------------------------------
*/

$level8 = Level::create([
    'title' => 'Materi 8: Menampilkan Gambar',
    'description' => 'Menampilkan gambar menggunakan HTML.',
    'order' => 8,
]);

Material::create([
    'level_id' => $level8->id,
    'title' => 'Kenapa Gambar Penting?',
    'content' => '
        <p>
            Website tanpa gambar
            seperti brosur hotel tanpa foto.
        </p>

        <p>
            Sulit membayangkan
            bagaimana suasananya.
        </p>
    ',
]);

Material::create([
    'level_id' => $level8->id,
    'title' => 'Tag img',
    'content' => '
        <p>
            Tag <code>;img;</code> digunakan
            untuk menampilkan gambar.
        </p>

        <p>
            Tag ini memiliki dua atribut penting:
        </p>

        <ul>
            <li><code>src</code> → alamat gambar</li>
            <li><code>alt</code> → teks alternatif</li>
        </ul>

        <p>
            Tag <code>&lt;img&gt;</code> tidak memiliki penutup.
        </p>
    ',
]);

Material::create([
    'level_id' => $level8->id,
    'title' => 'Contoh Menampilkan Gambar',
    'content' => '
        <p>
            Berikut contoh menampilkan foto kamar hotel.
        </p>

        <p>
            Karena contoh ini dijalankan di browser,
            kita menggunakan gambar dari internet.
        </p>

        <p>
            Klik <b>Jalankan Kode</b>
            untuk melihat hasilnya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Foto Kamar</title>
</head>
<body>

<h1>Kamar Deluxe</h1>

<img src="https://picsum.photos/400/250" alt="Foto kamar deluxe">

<p>
    Kamar deluxe dengan fasilitas lengkap
    dan pemandangan indah.
</p>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 9: LINK (ANCHOR)
|--------------------------------------------------------------------------
*/

$level9 = Level::create([
    'title' => 'Materi 9: Link dan Navigasi Dasar',
    'description' => 'Menghubungkan satu halaman ke halaman lain.',
    'order' => 9,
]);

Material::create([
    'level_id' => $level9->id,
    'title' => 'Website Itu Saling Terhubung',
    'content' => '
        <p>
            Sebuah website jarang berdiri sendirian.
        </p>

        <p>
            Biasanya ada banyak halaman:
            halaman utama, kamar, kontak, dan lain-lain.
        </p>

        <p>
            Untuk berpindah halaman,
            kita menggunakan <b>link</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level9->id,
    'title' => 'Tag a',
    'content' => '
        <p>
            Tag <code>&lt;a&gt;</code> digunakan untuk membuat link.
        </p>

        <p>
            Tag ini memiliki atribut penting:
        </p>

        <ul>
            <li><code>href</code> → alamat tujuan</li>
            <li><code>target</code> → tempat membuka link</li>
        </ul>
    ',
]);

Material::create([
    'level_id' => $level9->id,
    'title' => 'Contoh Link Website',
    'content' => '
        <p>
            Berikut contoh link ke website lain.
        </p>

        <p>
            Klik link tersebut
            dan lihat apa yang terjadi.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Link Website</title>
</head>
<body>

<h1>Hotel Bahagia</h1>

<p>
    Kunjungi media sosial kami:
</p>

<a href="https://www.instagram.com" target="_blank">
    Instagram Hotel
</a>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 10: MENU NAVIGASI
|--------------------------------------------------------------------------
*/

$level10 = Level::create([
    'title' => 'Materi 10: Menu Navigasi',
    'description' => 'Menyusun menu navigasi sederhana.',
    'order' => 10,
]);

Material::create([
    'level_id' => $level10->id,
    'title' => 'Apa Itu Navigasi?',
    'content' => '
        <p>
            Di hampir semua website,
            kamu akan menemukan menu di bagian atas.
        </p>

        <p>
            Menu ini membantu pengunjung
            berpindah antar halaman.
        </p>

        <p>
            Inilah yang disebut <b>navigasi</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level10->id,
    'title' => 'Tag nav',
    'content' => '
        <p>
            Tag <code>&lt;nav&gt;</code> digunakan
            untuk membungkus menu navigasi.
        </p>

        <p>
            Biasanya di dalamnya
            terdapat beberapa link.
        </p>
    ',
]);

Material::create([
    'level_id' => $level10->id,
    'title' => 'Contoh Menu Navigasi',
    'content' => '
        <p>
            Berikut contoh menu navigasi sederhana
            pada website hotel.
        </p>

        <p>
            Klik <b>Jalankan Kode</b>
            dan coba klik menu-menunya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Menu Navigasi</title>
</head>
<body>

<nav>
    <a href="#">Home</a> |
    <a href="#">Kamar</a> |
    <a href="#">Fasilitas</a> |
    <a href="#">Kontak</a>
</nav>

<h1>Selamat Datang di Hotel Bahagia</h1>

<p>
    Silakan pilih menu di atas
    untuk menjelajahi website kami.
</p>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 11: TABEL DATA
|--------------------------------------------------------------------------
*/

$level11 = Level::create([
    'title' => 'Materi 11: Tabel Data',
    'description' => 'Menampilkan data dalam bentuk tabel.',
    'order' => 11,
]);

Material::create([
    'level_id' => $level11->id,
    'title' => 'Data Perlu Disusun Rapi',
    'content' => '
        <p>
            Bayangkan daftar harga kamar hotel
            ditulis dalam paragraf panjang.
        </p>

        <p>
            Sulit dibaca dan membingungkan.
        </p>

        <p>
            Untuk itulah kita menggunakan <b>tabel</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level11->id,
    'title' => 'Struktur Tabel',
    'content' => '
        <p>
            Tabel terdiri dari baris dan kolom.
        </p>

        <ul>
            <li><code>&lt;table&gt;</code> → pembungkus tabel</li>
            <li><code>&lt;tr&gt;</code> → baris</li>
            <li><code>&lt;th&gt;</code> → judul kolom</li>
            <li><code>&lt;td&gt;</code> → isi kolom</li>
        </ul>
    ',
]);

Material::create([
    'level_id' => $level11->id,
    'title' => 'Contoh Tabel Harga Kamar',
    'content' => '
        <p>
            Berikut contoh tabel harga kamar hotel.
        </p>

        <p>
            Klik <b>Jalankan Kode</b>
            dan perhatikan susunannya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Harga Kamar</title>
</head>
<body>

<h1>Daftar Harga Kamar</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>Tipe Kamar</th>
        <th>Harga / Malam</th>
        <th>Kapasitas</th>
    </tr>
    <tr>
        <td>Standard</td>
        <td>Rp 500.000</td>
        <td>2 Orang</td>
    </tr>
    <tr>
        <td>Deluxe</td>
        <td>Rp 850.000</td>
        <td>2–3 Orang</td>
    </tr>
    <tr>
        <td>Suite</td>
        <td>Rp 1.500.000</td>
        <td>4 Orang</td>
    </tr>
</table>

</body>
</html>
    ')
]);
/*
|--------------------------------------------------------------------------
| LEVEL 12: FORM INPUT
|--------------------------------------------------------------------------
*/

$level12 = Level::create([
    'title' => 'Materi 12: Formulir Input',
    'description' => 'Menerima data dari pengunjung website.',
    'order' => 12,
]);

Material::create([
    'level_id' => $level12->id,
    'title' => 'Website Bisa Menerima Data',
    'content' => '
        <p>
            Website tidak hanya menampilkan informasi.
        </p>

        <p>
            Website juga bisa
            <b>menerima data dari pengunjung</b>.
        </p>

        <p>
            Contohnya: formulir pemesanan kamar.
        </p>
    ',
]);

Material::create([
    'level_id' => $level12->id,
    'title' => 'Tag form, input, dan label',
    'content' => '
        <p>
            Untuk membuat formulir,
            kita menggunakan:
        </p>

        <ul>
            <li><code>&lt;form&gt;</code> → pembungkus formulir</li>
            <li><code>&lt;label&gt;</code> → keterangan input</li>
            <li><code>&lt;input&gt;</code> → kolom isian</li>
        </ul>

        <p>
            Pada tahap ini,
            form <b>belum mengirim data</b>.
        </p>
    ',
]);

Material::create([
    'level_id' => $level12->id,
    'title' => 'Contoh Form Pemesanan Kamar',
    'content' => '
        <p>
            Berikut contoh tampilan form pemesanan kamar.
        </p>

        <p>
            Kamu bisa mengetik di kolom input,
            tapi datanya belum dikirim ke mana pun.
        </p>

        <p>
            Klik <b>Jalankan Kode</b>
            untuk mencobanya.
        </p>
    ',
    'example_code' => htmlspecialchars('
<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan</title>
</head>
<body>

<h1>Form Pemesanan Kamar</h1>

<form>
    <label>Nama Tamu:</label><br>
    <input type="text" placeholder="Masukkan nama Anda"><br><br>

    <label>Email:</label><br>
    <input type="email" placeholder="nama@email.com"><br><br>

    <label>Tanggal Check-in:</label><br>
    <input type="date"><br><br>

    <button type="submit">Pesan Sekarang</button>
</form>

</body>
</html>
    ')
]);



    }
}
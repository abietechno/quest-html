-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2026 at 04:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `html`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1770309525),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1770309525;', 1770309525);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `title`, `description`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Level 1: Mengenal HTML', 'Memahami HTML sebagai fondasi utama sebuah website.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(2, 'Level 2: Struktur Dasar HTML', 'Mengenal kerangka dasar sebuah halaman website.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(3, 'Level 3: Judul Halaman dan Judul Konten', 'Memahami perbedaan judul halaman dan judul yang terlihat di website.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(4, 'Level 4: Paragraf dan Teks Konten', 'Menyusun teks agar mudah dibaca oleh pengunjung.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(5, 'Level 5: Hirarki Judul (Heading)', 'Menyusun informasi dari judul besar hingga subjudul.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(6, 'Level 6: Daftar Menu dan List', 'Menyusun daftar menggunakan HTML.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(7, 'Level 7: Daftar Berurutan (Ordered List)', 'Menyusun langkah atau urutan menggunakan HTML.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(8, 'Level 8: Menampilkan Gambar', 'Menampilkan gambar menggunakan HTML.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(9, 'Level 9: Link dan Navigasi Dasar', 'Menghubungkan satu halaman ke halaman lain.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(10, 'Level 10: Menu Navigasi', 'Menyusun menu navigasi sederhana.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(11, 'Level 11: Tabel Data', 'Menampilkan data dalam bentuk tabel.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(12, 'Level 12: Formulir Input', 'Menerima data dari pengunjung website.', 1, '2026-02-05 09:31:14', '2026-02-05 09:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `quiz_passed` tinyint(1) NOT NULL DEFAULT '0',
  `score` int NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `material_read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `example_code` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `level_id`, `order`, `title`, `content`, `example_code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Website Itu Dibangun, Bukan Sulap', '\n        <p>\n            Pernah melihat gedung hotel yang megah?\n            Sebelum terlihat indah, gedung itu pasti punya <b>kerangka</b>.\n        </p>\n\n        <p>\n            Website juga begitu. Ia tidak muncul begitu saja.\n            Ada struktur yang menyusunnya dari nol.\n        </p>\n\n        <p>\n            Struktur itulah yang disebut <b>HTML</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(2, 1, 1, 'HTML Itu Apa?', '\n        <p>\n            HTML adalah singkatan dari <b>HyperText Markup Language</b>.\n        </p>\n\n        <p>\n            Jangan khawatir dengan istilahnya.\n            Anggap saja HTML adalah <b>bahasa untuk menyusun kerangka website</b>.\n        </p>\n\n        <p>\n            HTML tidak membuat website berwarna atau bergerak.\n            Tugasnya hanya satu: <b>menyusun isi dan struktur</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(3, 1, 1, 'Analogi Bangunan', '\n        <p>\n            Bayangkan website seperti sebuah bangunan:\n        </p>\n\n        <ul>\n            <li><b>HTML</b> = kerangka bangunan</li>\n            <li>CSS = cat dan dekorasi</li>\n            <li>JavaScript = listrik & pintu otomatis</li>\n        </ul>\n\n        <p>\n            Di level ini, kita hanya fokus ke <b>kerangkanya dulu</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(4, 2, 1, 'Kerangka Website', '\n        <p>\n            Setiap halaman HTML memiliki kerangka dasar.\n        </p>\n\n        <p>\n            Kerangka ini memberi tahu browser:\n            mana bagian kepala, dan mana bagian isi.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(5, 2, 1, 'Tag html', '\n        <p>\n            Tag <code>&lt;html&gt;</code> adalah pembungkus utama.\n        </p>\n\n        <p>\n            Semua kode HTML HARUS berada di dalamnya.\n            Tanpa tag ini, browser bisa bingung.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(6, 2, 1, 'Tag head dan body', '\n        <p>\n            HTML dibagi menjadi dua bagian utama:\n        </p>\n\n        <ul>\n            <li><code>&lt;head&gt;</code> → informasi halaman</li>\n            <li><code>&lt;body&gt;</code> → isi yang terlihat</li>\n        </ul>\n\n        <p>\n            Sekarang mari kita lihat contoh nyatanya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Website Pertamaku&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n    &lt;h1&gt;Hello World&lt;/h1&gt;\n    &lt;p&gt;Ini adalah halaman HTML pertama saya.&lt;/p&gt;\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(7, 2, 1, 'Apa yang Terjadi Jika Salah Tempat?', '\n        <p>\n            Jika teks diletakkan di <code>&lt;head&gt;</code>,\n            browser <b>tidak akan menampilkannya</b>.\n        </p>\n\n        <p>\n            Karena browser hanya menampilkan isi\n            yang ada di dalam <code>&lt;body&gt;</code>.\n        </p>\n\n        <p>\n            Coba perhatikan kembali contoh sebelumnya,\n            lalu klik <b>Jalankan Kode</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(8, 3, 1, 'Judul Itu Ada Dua', '\n        <p>\n            Dalam sebuah website, ternyata ada <b>dua jenis judul</b>.\n        </p>\n\n        <p>\n            Seperti hotel:\n        </p>\n\n        <ul>\n            <li>Nama hotel di papan luar gedung</li>\n            <li>Nama hotel di dalam lobby</li>\n        </ul>\n\n        <p>\n            Keduanya penting, tapi fungsinya berbeda.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(9, 3, 1, 'Tag title (Judul Halaman)', '\n        <p>\n            Tag <code>&lt;title&gt;</code> digunakan sebagai judul halaman.\n        </p>\n\n        <p>\n            Judul ini <b>tidak tampil di layar</b>,\n            tapi muncul di tab browser.\n        </p>\n\n        <p>\n            Anggap saja ini adalah <b>nama hotel di papan luar gedung</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(10, 3, 1, 'Tag h1 (Judul Konten)', '\n        <p>\n            Tag <code>&lt;h1&gt;</code> adalah judul utama\n            yang <b>terlihat langsung oleh pengunjung</b>.\n        </p>\n\n        <p>\n            Ini seperti tulisan besar di lobby hotel.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(11, 3, 1, 'Contoh Judul Halaman dan Judul Konten', '\n        <p>\n            Sekarang perhatikan contoh berikut.\n        </p>\n\n        <p>\n            Coba klik <b>Jalankan Kode</b>,\n            lalu perhatikan:\n        </p>\n\n        <ul>\n            <li>Judul di tab browser</li>\n            <li>Judul besar di halaman</li>\n        </ul>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Hotel Bahagia&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Selamat Datang di Hotel Bahagia&lt;/h1&gt;\n&lt;p&gt;Hotel nyaman untuk liburan keluarga.&lt;/p&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(12, 4, 1, 'Kenapa Teks Perlu Paragraf?', '\n        <p>\n            Bayangkan membaca brosur hotel\n            tanpa jarak antar kalimat.\n        </p>\n\n        <p>\n            Pasti melelahkan, bukan?\n        </p>\n\n        <p>\n            Di HTML, paragraf membantu\n            memisahkan ide agar lebih nyaman dibaca.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(13, 4, 1, 'Tag p', '\n        <p>\n            Tag <code>&lt;p&gt;</code> digunakan untuk membuat paragraf.\n        </p>\n\n        <p>\n            Setiap paragraf akan otomatis\n            memiliki jarak dengan paragraf lain.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(14, 4, 1, 'Contoh Paragraf di Website', '\n        <p>\n            Perhatikan contoh deskripsi hotel berikut.\n        </p>\n\n        <p>\n            Setiap paragraf berdiri sendiri\n            dan mudah dibaca.\n        </p>\n\n        <p>\n            Silakan klik <b>Jalankan Kode</b>\n            untuk melihat hasilnya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Deskripsi Hotel&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Grand Hotel Lux&lt;/h1&gt;\n\n&lt;p&gt;\n    Grand Hotel Lux adalah hotel mewah\n    dengan pemandangan laut yang indah.\n&lt;/p&gt;\n\n&lt;p&gt;\n    Kami menyediakan kamar nyaman,\n    restoran bintang lima,\n    dan kolam renang eksklusif.\n&lt;/p&gt;\n\n&lt;p&gt;\n    Kenyamanan Anda adalah prioritas kami.\n&lt;/p&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(15, 5, 1, 'Informasi Itu Bertingkat', '\n        <p>\n            Di hotel, tidak semua tulisan ukurannya sama.\n        </p>\n\n        <p>\n            Nama hotel lebih besar\n            daripada tulisan petunjuk kamar mandi.\n        </p>\n\n        <p>\n            Website juga seperti itu.\n            Informasi disusun dari yang <b>paling penting</b>\n            ke yang lebih detail.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(16, 5, 1, 'Tag Heading (h1 – h6)', '\n        <p>\n            HTML menyediakan enam tingkat judul:\n            dari <code>&lt;h1&gt;</code> sampai <code>&lt;h6&gt;</code>.\n        </p>\n\n        <ul>\n            <li><code>&lt;h1&gt;</code> → judul utama</li>\n            <li><code>&lt;h2&gt;</code> → subjudul</li>\n            <li><code>&lt;h3&gt;</code> → bagian lebih kecil</li>\n        </ul>\n\n        <p>\n            Semakin besar angkanya,\n            semakin kecil perannya.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(17, 5, 1, 'Contoh Struktur Informasi', '\n        <p>\n            Perhatikan contoh struktur hotel berikut.\n        </p>\n\n        <p>\n            Judul besar untuk hotel,\n            judul lebih kecil untuk fasilitasnya.\n        </p>\n\n        <p>\n            Klik <b>Jalankan Kode</b>\n            dan amati perbedaannya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Struktur Hotel&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Grand Hotel Lux&lt;/h1&gt;\n\n&lt;h2&gt;Fasilitas Utama&lt;/h2&gt;\n\n&lt;h3&gt;Lobby&lt;/h3&gt;\n&lt;p&gt;Tempat resepsionis dan informasi tamu.&lt;/p&gt;\n\n&lt;h3&gt;Restoran&lt;/h3&gt;\n&lt;p&gt;Menyajikan menu lokal dan internasional.&lt;/p&gt;\n\n&lt;h2&gt;Jenis Kamar&lt;/h2&gt;\n\n&lt;h3&gt;Standard&lt;/h3&gt;\n&lt;p&gt;Kamar nyaman untuk dua orang.&lt;/p&gt;\n\n&lt;h3&gt;Deluxe&lt;/h3&gt;\n&lt;p&gt;Kamar luas dengan pemandangan laut.&lt;/p&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(18, 6, 1, 'Kenapa Perlu Daftar?', '\n        <p>\n            Bayangkan menu sarapan hotel\n            ditulis dalam satu paragraf panjang.\n        </p>\n\n        <p>\n            Sulit dibaca, bukan?\n        </p>\n\n        <p>\n            Untuk itulah HTML menyediakan\n            <b>daftar (list)</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(19, 6, 1, 'Tag ul dan li', '\n        <p>\n            Untuk membuat daftar,\n            kita menggunakan dua tag:\n        </p>\n\n        <ul>\n            <li><code>&lt;ul&gt;</code> → pembungkus daftar</li>\n            <li><code>&lt;li&gt;</code> → item daftar</li>\n        </ul>\n\n        <p>\n            Setiap item akan otomatis\n            ditampilkan dalam baris terpisah.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(20, 6, 1, 'Contoh Menu Sarapan', '\n        <p>\n            Berikut contoh menu sarapan hotel\n            yang ditulis menggunakan list.\n        </p>\n\n        <p>\n            Klik <b>Jalankan Kode</b>\n            untuk melihat hasilnya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Menu Sarapan&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Menu Sarapan Gratis&lt;/h1&gt;\n\n&lt;ul&gt;\n    &lt;li&gt;Nasi Goreng Spesial&lt;/li&gt;\n    &lt;li&gt;Bubur Ayam&lt;/li&gt;\n    &lt;li&gt;Roti Bakar dan Selai&lt;/li&gt;\n    &lt;li&gt;Kopi dan Teh&lt;/li&gt;\n&lt;/ul&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(21, 7, 1, 'Langkah Itu Ada Urutannya', '\n        <p>\n            Ada hal-hal yang <b>harus dilakukan berurutan</b>.\n        </p>\n\n        <p>\n            Contohnya, SOP membersihkan kamar hotel.\n            Jika urutannya salah, hasilnya tidak maksimal.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(22, 7, 1, 'Tag ol dan li', '\n        <p>\n            Untuk membuat daftar berurutan,\n            kita menggunakan:\n        </p>\n\n        <ul>\n            <li><code>&lt;ol&gt;</code> → daftar berurutan</li>\n            <li><code>&lt;li&gt;</code> → item daftar</li>\n        </ul>\n\n        <p>\n            Browser akan otomatis memberi nomor.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(23, 7, 1, 'Contoh SOP Housekeeping', '\n        <p>\n            Berikut contoh SOP membersihkan kamar hotel.\n        </p>\n\n        <p>\n            Perhatikan urutan langkahnya,\n            lalu klik <b>Jalankan Kode</b>.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;SOP Housekeeping&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;SOP Membersihkan Kamar&lt;/h1&gt;\n\n&lt;ol&gt;\n    &lt;li&gt;Buka jendela untuk sirkulasi udara&lt;/li&gt;\n    &lt;li&gt;Rapikan tempat tidur&lt;/li&gt;\n    &lt;li&gt;Ganti sprei dan sarung bantal&lt;/li&gt;\n    &lt;li&gt;Bersihkan kamar mandi&lt;/li&gt;\n    &lt;li&gt;Vacuum lantai&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(24, 8, 1, 'Kenapa Gambar Penting?', '\n        <p>\n            Website tanpa gambar\n            seperti brosur hotel tanpa foto.\n        </p>\n\n        <p>\n            Sulit membayangkan\n            bagaimana suasananya.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(25, 8, 1, 'Tag img', '\n        <p>\n            Tag <code>;img;</code> digunakan\n            untuk menampilkan gambar.\n        </p>\n\n        <p>\n            Tag ini memiliki dua atribut penting:\n        </p>\n\n        <ul>\n            <li><code>src</code> → alamat gambar</li>\n            <li><code>alt</code> → teks alternatif</li>\n        </ul>\n\n        <p>\n            Tag <code>&lt;img&gt;</code> tidak memiliki penutup.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(26, 8, 1, 'Contoh Menampilkan Gambar', '\n        <p>\n            Berikut contoh menampilkan foto kamar hotel.\n        </p>\n\n        <p>\n            Karena contoh ini dijalankan di browser,\n            kita menggunakan gambar dari internet.\n        </p>\n\n        <p>\n            Klik <b>Jalankan Kode</b>\n            untuk melihat hasilnya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Foto Kamar&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Kamar Deluxe&lt;/h1&gt;\n\n&lt;img src=&quot;https://picsum.photos/400/250&quot; alt=&quot;Foto kamar deluxe&quot;&gt;\n\n&lt;p&gt;\n    Kamar deluxe dengan fasilitas lengkap\n    dan pemandangan indah.\n&lt;/p&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(27, 9, 1, 'Website Itu Saling Terhubung', '\n        <p>\n            Sebuah website jarang berdiri sendirian.\n        </p>\n\n        <p>\n            Biasanya ada banyak halaman:\n            halaman utama, kamar, kontak, dan lain-lain.\n        </p>\n\n        <p>\n            Untuk berpindah halaman,\n            kita menggunakan <b>link</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(28, 9, 1, 'Tag a', '\n        <p>\n            Tag <code>&lt;a&gt;</code> digunakan untuk membuat link.\n        </p>\n\n        <p>\n            Tag ini memiliki atribut penting:\n        </p>\n\n        <ul>\n            <li><code>href</code> → alamat tujuan</li>\n            <li><code>target</code> → tempat membuka link</li>\n        </ul>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(29, 9, 1, 'Contoh Link Website', '\n        <p>\n            Berikut contoh link ke website lain.\n        </p>\n\n        <p>\n            Klik link tersebut\n            dan lihat apa yang terjadi.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Link Website&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Hotel Bahagia&lt;/h1&gt;\n\n&lt;p&gt;\n    Kunjungi media sosial kami:\n&lt;/p&gt;\n\n&lt;a href=&quot;https://www.instagram.com&quot; target=&quot;_blank&quot;&gt;\n    Instagram Hotel\n&lt;/a&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(30, 10, 1, 'Apa Itu Navigasi?', '\n        <p>\n            Di hampir semua website,\n            kamu akan menemukan menu di bagian atas.\n        </p>\n\n        <p>\n            Menu ini membantu pengunjung\n            berpindah antar halaman.\n        </p>\n\n        <p>\n            Inilah yang disebut <b>navigasi</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(31, 10, 1, 'Tag nav', '\n        <p>\n            Tag <code>&lt;nav&gt;</code> digunakan\n            untuk membungkus menu navigasi.\n        </p>\n\n        <p>\n            Biasanya di dalamnya\n            terdapat beberapa link.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(32, 10, 1, 'Contoh Menu Navigasi', '\n        <p>\n            Berikut contoh menu navigasi sederhana\n            pada website hotel.\n        </p>\n\n        <p>\n            Klik <b>Jalankan Kode</b>\n            dan coba klik menu-menunya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Menu Navigasi&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;nav&gt;\n    &lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt; |\n    &lt;a href=&quot;#&quot;&gt;Kamar&lt;/a&gt; |\n    &lt;a href=&quot;#&quot;&gt;Fasilitas&lt;/a&gt; |\n    &lt;a href=&quot;#&quot;&gt;Kontak&lt;/a&gt;\n&lt;/nav&gt;\n\n&lt;h1&gt;Selamat Datang di Hotel Bahagia&lt;/h1&gt;\n\n&lt;p&gt;\n    Silakan pilih menu di atas\n    untuk menjelajahi website kami.\n&lt;/p&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(33, 11, 1, 'Data Perlu Disusun Rapi', '\n        <p>\n            Bayangkan daftar harga kamar hotel\n            ditulis dalam paragraf panjang.\n        </p>\n\n        <p>\n            Sulit dibaca dan membingungkan.\n        </p>\n\n        <p>\n            Untuk itulah kita menggunakan <b>tabel</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(34, 11, 1, 'Struktur Tabel', '\n        <p>\n            Tabel terdiri dari baris dan kolom.\n        </p>\n\n        <ul>\n            <li><code>&lt;table&gt;</code> → pembungkus tabel</li>\n            <li><code>&lt;tr&gt;</code> → baris</li>\n            <li><code>&lt;th&gt;</code> → judul kolom</li>\n            <li><code>&lt;td&gt;</code> → isi kolom</li>\n        </ul>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(35, 11, 1, 'Contoh Tabel Harga Kamar', '\n        <p>\n            Berikut contoh tabel harga kamar hotel.\n        </p>\n\n        <p>\n            Klik <b>Jalankan Kode</b>\n            dan perhatikan susunannya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Harga Kamar&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Daftar Harga Kamar&lt;/h1&gt;\n\n&lt;table border=&quot;1&quot; cellpadding=&quot;8&quot;&gt;\n    &lt;tr&gt;\n        &lt;th&gt;Tipe Kamar&lt;/th&gt;\n        &lt;th&gt;Harga / Malam&lt;/th&gt;\n        &lt;th&gt;Kapasitas&lt;/th&gt;\n    &lt;/tr&gt;\n    &lt;tr&gt;\n        &lt;td&gt;Standard&lt;/td&gt;\n        &lt;td&gt;Rp 500.000&lt;/td&gt;\n        &lt;td&gt;2 Orang&lt;/td&gt;\n    &lt;/tr&gt;\n    &lt;tr&gt;\n        &lt;td&gt;Deluxe&lt;/td&gt;\n        &lt;td&gt;Rp 850.000&lt;/td&gt;\n        &lt;td&gt;2–3 Orang&lt;/td&gt;\n    &lt;/tr&gt;\n    &lt;tr&gt;\n        &lt;td&gt;Suite&lt;/td&gt;\n        &lt;td&gt;Rp 1.500.000&lt;/td&gt;\n        &lt;td&gt;4 Orang&lt;/td&gt;\n    &lt;/tr&gt;\n&lt;/table&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(36, 12, 1, 'Website Bisa Menerima Data', '\n        <p>\n            Website tidak hanya menampilkan informasi.\n        </p>\n\n        <p>\n            Website juga bisa\n            <b>menerima data dari pengunjung</b>.\n        </p>\n\n        <p>\n            Contohnya: formulir pemesanan kamar.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(37, 12, 1, 'Tag form, input, dan label', '\n        <p>\n            Untuk membuat formulir,\n            kita menggunakan:\n        </p>\n\n        <ul>\n            <li><code>&lt;form&gt;</code> → pembungkus formulir</li>\n            <li><code>&lt;label&gt;</code> → keterangan input</li>\n            <li><code>&lt;input&gt;</code> → kolom isian</li>\n        </ul>\n\n        <p>\n            Pada tahap ini,\n            form <b>belum mengirim data</b>.\n        </p>\n    ', NULL, '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(38, 12, 1, 'Contoh Form Pemesanan Kamar', '\n        <p>\n            Berikut contoh tampilan form pemesanan kamar.\n        </p>\n\n        <p>\n            Kamu bisa mengetik di kolom input,\n            tapi datanya belum dikirim ke mana pun.\n        </p>\n\n        <p>\n            Klik <b>Jalankan Kode</b>\n            untuk mencobanya.\n        </p>\n    ', '\n&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n&lt;head&gt;\n    &lt;title&gt;Form Pemesanan&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n\n&lt;h1&gt;Form Pemesanan Kamar&lt;/h1&gt;\n\n&lt;form&gt;\n    &lt;label&gt;Nama Tamu:&lt;/label&gt;&lt;br&gt;\n    &lt;input type=&quot;text&quot; placeholder=&quot;Masukkan nama Anda&quot;&gt;&lt;br&gt;&lt;br&gt;\n\n    &lt;label&gt;Email:&lt;/label&gt;&lt;br&gt;\n    &lt;input type=&quot;email&quot; placeholder=&quot;nama@email.com&quot;&gt;&lt;br&gt;&lt;br&gt;\n\n    &lt;label&gt;Tanggal Check-in:&lt;/label&gt;&lt;br&gt;\n    &lt;input type=&quot;date&quot;&gt;&lt;br&gt;&lt;br&gt;\n\n    &lt;button type=&quot;submit&quot;&gt;Pesan Sekarang&lt;/button&gt;\n&lt;/form&gt;\n\n&lt;/body&gt;\n&lt;/html&gt;\n    ', '2026-02-05 09:31:14', '2026-02-05 09:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `material_user`
--

CREATE TABLE `material_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `material_id` bigint UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_22_153427_create_levels_table', 1),
(5, '2025_12_22_153444_create_materials_table', 1),
(6, '2025_12_22_154705_create_level_user_table', 1),
(7, '2025_12_22_171845_create_quizzes_table', 1),
(8, '2025_12_24_142622_add_is_admin_to_users_table', 1),
(9, '2026_01_07_131623_add_order_to_materials_table', 1),
(10, '2026_01_09_150141_add_material_read_at_to_level_user_table', 1),
(11, '2026_01_09_163635_create_material_user_table', 1),
(12, '2026_01_14_191835_create_user_level_progress_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `level_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'Apa itu HTML?', 'Bahasa pemrograman untuk membuat game', 'Bahasa untuk mengatur warna website', 'Bahasa untuk menyusun struktur website', 'Aplikasi untuk membuat website', 'c', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(2, 1, 'Dalam analogi bangunan, HTML berperan sebagai apa?', 'Cat dan dekorasi', 'Kerangka bangunan', 'Listrik dan lampu', 'Pintu otomatis', 'b', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(3, 1, 'Apa tugas utama HTML?', 'Membuat website bergerak', 'Mengatur tampilan warna', 'Menyusun isi dan struktur halaman', 'Menyimpan data pengunjung', 'c', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(4, 1, 'Manakah yang BUKAN tugas HTML?', 'Menentukan struktur halaman', 'Menampilkan teks dan gambar', 'Membuat animasi interaktif', 'Menyusun konten', 'c', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(5, 2, 'Dalam analogi bangunan, HTML berperan sebagai apa?', 'Dekorasi interior', 'Kerangka atau struktur bangunan', 'Papan iklan hotel', 'Peralatan dapur', 'b', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(6, 2, 'Tag manakah yang mencakup seluruh struktur halaman website?', '<body>', '<head>', '<title>', '<html>', 'd', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(7, 2, 'Bagian mana yang berisi konten yang dilihat langsung oleh pengunjung?', '<html>', '<head>', '<body>', '<title>', 'c', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(8, 2, 'Jika teks tidak muncul di layar browser, kemungkinan besar teks tersebut diletakkan di mana?', 'Di dalam <body>', 'Di luar struktur HTML', 'Di dalam <head>', 'Di dalam <html>', 'c', '2026-02-05 09:31:14', '2026-02-05 09:31:14'),
(9, 3, 'Di mana teks dari tag <title> ditampilkan?', 'Di dalam halaman website', 'Di tab browser', 'Di dalam body', 'Di footer halaman', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(10, 3, 'Tag manakah yang digunakan sebagai judul utama halaman?', '<title>', '<head>', '<h1>', '<html>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(11, 3, 'Mengapa <title> diletakkan di dalam <head>?', 'Karena isinya panjang', 'Karena tidak perlu ditampilkan di halaman', 'Agar teksnya lebih besar', 'Karena wajib satu baris', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(12, 3, 'Dalam analogi hotel, <h1> diibaratkan sebagai apa?', 'Nama hotel di peta', 'Papan nama di jalan', 'Tulisan besar di lobby', 'Buku tamu', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(13, 4, 'Apa fungsi utama tag <p>?', 'Menampilkan judul utama', 'Menulis teks dalam bentuk paragraf', 'Menampilkan nama website di tab', 'Membuat tombol', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(14, 4, 'Dalam analogi hotel, tag <p> diibaratkan sebagai apa?', 'Papan nama hotel', 'Judul di lobby', 'Isi brosur hotel', 'Denah bangunan', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(15, 4, 'Apa yang terjadi jika Anda menulis dua tag <p> berturut-turut?', 'Teks digabung menjadi satu baris', 'Teks tidak ditampilkan', 'Teks tampil sebagai dua paragraf terpisah', 'Website error', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(16, 4, 'Di mana biasanya tag <p> diletakkan?', 'Di dalam <head>', 'Di dalam <html>', 'Di dalam <body>', 'Di luar struktur HTML', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(17, 5, 'Apa fungsi utama penggunaan h1 sampai h6?', 'Membuat teks berwarna', 'Mengatur ukuran font', 'Menyusun hierarki informasi', 'Menambah animasi', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(18, 5, 'Tag manakah yang paling penting dalam satu halaman?', '<h6>', '<h4>', '<h2>', '<h1>', 'd', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(19, 5, 'Dalam analogi hotel, h2 paling tepat menggambarkan apa?', 'Nama hotel', 'Area utama seperti lobby atau restoran', 'Detail menu makanan', 'Catatan kecil', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(20, 5, 'Manakah penggunaan heading yang benar?', 'h1 → h4 → h2', 'h1 → h2 → h3', 'h3 → h1 → h2', 'h2 → h6 → h1', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(21, 6, 'Tag apa yang digunakan sebagai wadah daftar tanpa nomor?', '<li>', '<ol>', '<ul>', '<p>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(22, 6, 'Fungsi utama tag <li> adalah?', 'Membuat judul', 'Membuat paragraf', 'Membungkus item di dalam daftar', 'Membuat link', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(23, 6, 'Apa yang terjadi jika <li> tidak diletakkan di dalam <ul>?', 'Tampil normal', 'Website error total', 'Struktur menjadi tidak rapi / tidak sesuai standar', 'Menjadi judul otomatis', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(24, 6, 'Kapan sebaiknya menggunakan daftar (list)?', 'Saat menulis cerita panjang', 'Saat menampilkan informasi yang setara', 'Saat menulis judul besar', 'Saat menampilkan nama website', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(25, 7, 'Tag HTML apa yang digunakan untuk daftar berurutan?', '<ul>', '<li>', '<ol>', '<p>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(26, 7, 'Apa fungsi utama <ol>?', 'Menampilkan teks tebal', 'Membuat daftar tanpa urutan', 'Membuat daftar dengan urutan langkah', 'Membuat paragraf', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(27, 7, 'Tag apa yang tetap digunakan di dalam <ol>?', '<p>', '<li>', '<ul>', '<h1>', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(28, 7, 'Kapan sebaiknya menggunakan <ol>?', 'Saat menampilkan menu makanan', 'Saat menulis cerita panjang', 'Saat urutan langkah sangat penting', 'Saat membuat judul halaman', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(29, 8, 'Tag HTML apa yang digunakan untuk menampilkan gambar?', '<picture>', '<image>', '<img>', '<src>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(30, 8, 'Atribut apa yang wajib agar gambar bisa muncul?', 'alt', 'title', 'src', 'href', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(31, 8, 'Apa fungsi atribut alt?', 'Mengatur ukuran gambar', 'Memberi deskripsi gambar', 'Menghubungkan halaman', 'Memberi warna gambar', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(32, 8, 'Manakah penulisan tag img yang benar?', '<img>foto.jpg</img>', '<img src=\"foto.jpg\">', '<img alt=\"foto\">', '<img></img>', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(33, 9, 'Tag HTML apa yang digunakan untuk membuat link?', '<link>', '<href>', '<a>', '<url>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(34, 9, 'Atribut apa yang menentukan tujuan link?', 'src', 'target', 'href', 'alt', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(35, 9, 'Apa fungsi target=\"_blank\"?', 'Menutup browser', 'Membuka link di tab baru', 'Menghapus link', 'Mengganti warna link', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(36, 9, 'Manakah penulisan link yang benar?', '<a>google.com</a>', '<a href=\"google.com\">', '<a href=\"https://google.com\">Google</a>', '<href=\"https://google.com\">', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(37, 10, 'Apa fungsi utama menu navigasi?', 'Menampilkan gambar', 'Membantu berpindah antar halaman', 'Menyimpan data', 'Mengatur warna website', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(38, 10, 'Tag HTML apa yang digunakan untuk membungkus menu navigasi?', '<menu>', '<a>', '<nav>', '<header>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(39, 10, 'Di dalam <nav>, biasanya berisi apa?', 'Gambar', 'Paragraf panjang', 'Link (<a>)', 'Form input', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(40, 10, 'Menu navigasi umumnya diletakkan di bagian mana?', 'Di tengah paragraf', 'Di bagian atas halaman', 'Di dalam tabel', 'Di dalam <head>', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(41, 11, 'Tag utama untuk membuat tabel adalah?', '<grid>', '<table>', '<td>', '<tr>', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(42, 11, 'Tag apa yang digunakan untuk membuat baris tabel?', '<td>', '<th>', '<tr>', '<row>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(43, 11, 'Apa perbedaan <th> dan <td>?', 'Tidak ada perbedaan', '<th> untuk gambar, <td> untuk teks', '<th> untuk judul, <td> untuk data', '<th> hanya untuk CSS', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(44, 11, 'Kenapa tabel cocok untuk daftar harga?', 'Karena warnanya otomatis', 'Karena bisa menyusun data baris & kolom', 'Karena lebih cepat loading', 'Karena wajib di HTML', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(45, 12, 'Tag apa yang menjadi wadah utama formulir?', '<input>', '<form>', '<label>', '<data>', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(46, 12, 'Tag apa yang digunakan untuk memasukkan teks?', '<text>', '<field>', '<input type=\"text\">', '<form>', 'c', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(47, 12, 'Apa fungsi atribut placeholder?', 'Menyimpan data', 'Menampilkan contoh teks', 'Mengirim data', 'Menghapus input', 'b', '2026-02-05 09:31:15', '2026-02-05 09:31:15'),
(48, 12, 'Atribut apa yang memberi nama data input?', 'type', 'id', 'class', 'name', 'd', '2026-02-05 09:31:15', '2026-02-05 09:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wWiv8fgsQJdTOZ6iOmY0SQRyH7pr1zw6f4tts0Dt', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiaGp4c2dpNDJwYkZaWmRmd25WUG5GbEI2Q2xDTUljOEdrWVF0TmtoSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjY6InRhYmxlcyI7YTo0OntzOjQwOiIyZjcxNzBhYjVjNTE4MjlkMWI1MjI2OTNhNGJmMmE2NF9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToibGV2ZWwudGl0bGUiO3M6NToibGFiZWwiO3M6NToiTGV2ZWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjc6ImNvbnRlbnQiO3M6NToibGFiZWwiO3M6NjoiTWF0ZXJpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiZXhhbXBsZV9jb2RlIjtzOjU6ImxhYmVsIjtzOjExOiJDb250b2ggS29kZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6NjoiRGlidWF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJvcmRlciI7czo1OiJsYWJlbCI7czo2OiJVcnV0YW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6Ijg2N2VkOTNkOTdhNGVjNjQ3YjI4YjZjMmFmYjE2ZGIzX2NvbHVtbnMiO2E6Mzp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJsZXZlbC50aXRsZSI7czo1OiJsYWJlbCI7czo1OiJMZXZlbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoicXVlc3Rpb24iO3M6NToibGFiZWwiO3M6NDoiU29hbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6NjoiRGlidWF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI3ZWI4M2QxMmQ1NGU5MzNjODY3YjdlMGRiOTMzNzk3OF9jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJhdmF0YXIiO3M6NToibGFiZWwiO3M6NjoiQXZhdGFyIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJuYW1lIjtzOjU6ImxhYmVsIjtzOjQ6Ik5hbWEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6ImVtYWlsIjtzOjU6ImxhYmVsIjtzOjU6IkVtYWlsIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToidG90YWxfc2NvcmUiO3M6NToibGFiZWwiO3M6MTE6IlRvdGFsIFNjb3JlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJwcm9ncmVzcyI7czo1OiJsYWJlbCI7czo4OiJQcm9ncmVzcyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6OToiVGVyZGFmdGFyIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI4MDIzODFlMmYwZjNjNjcwNGZiOGJlZDg1ZDFkMzEzMl9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJMZXZlbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTE6InBpdm90LnNjb3JlIjtzOjU6ImxhYmVsIjtzOjU6IlNjb3JlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNzoicGl2b3QucXVpel9wYXNzZWQiO3M6NToibGFiZWwiO3M6NDoiUXVpeiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoicHJvZ3Jlc3MiO3M6NToibGFiZWwiO3M6ODoiUHJvZ3Jlc3MiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE4OiJwaXZvdC5jb21wbGV0ZWRfYXQiO3M6NToibGFiZWwiO3M6NzoiU2VsZXNhaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fXM6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1770309507);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`, `is_admin`) VALUES
(1, 'MUZAKKI (Muzakki_220631100102_D)', '220631100102@student.trunojoyo.ac.id', NULL, NULL, NULL, '2026-02-05 09:32:44', '2026-02-05 09:38:26', NULL, '23.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level_progress`
--

CREATE TABLE `user_level_progress` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `materi_done` tinyint(1) NOT NULL DEFAULT '0',
  `quiz_done` tinyint(1) NOT NULL DEFAULT '0',
  `score` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `level_user_user_id_level_id_unique` (`user_id`,`level_id`),
  ADD KEY `level_user_level_id_foreign` (`level_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materials_level_id_foreign` (`level_id`);

--
-- Indexes for table `material_user`
--
ALTER TABLE `material_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `material_user_user_id_material_id_unique` (`user_id`,`material_id`),
  ADD KEY `material_user_material_id_foreign` (`material_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_level_id_foreign` (`level_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_level_progress`
--
ALTER TABLE `user_level_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level_progress_user_id_foreign` (`user_id`),
  ADD KEY `user_level_progress_level_id_foreign` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `material_user`
--
ALTER TABLE `material_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_level_progress`
--
ALTER TABLE `user_level_progress`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `level_user`
--
ALTER TABLE `level_user`
  ADD CONSTRAINT `level_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `level_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `material_user`
--
ALTER TABLE `material_user`
  ADD CONSTRAINT `material_user_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `material_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_level_progress`
--
ALTER TABLE `user_level_progress`
  ADD CONSTRAINT `user_level_progress_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_level_progress_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

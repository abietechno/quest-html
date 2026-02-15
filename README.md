
# HTML Hotel Quest (Muzzaki Project)

## 🚀 Optimasi Kode & Performa

Aplikasi ini telah dioptimalkan untuk menangani beban tinggi (**High Concurrency**) hingga 100-500 pengguna simultan.

### 1. Mengatasi N+1 Query
Salah satu beban terbesar aplikasi Laravel adalah N+1 Query (melakukan query database berulang-ulang di dalam loop).
- **Solusi**: Menggunakan teknik **Eager Loading** (`with`, `load`) pada `LevelController`.
- **Hasil**: Data Level, Materi, dan Progress User diambil dalam **2-3 Query saja** di awal, bukan ratusan query per halaman.

### 2. Penggunaan Memori vs Database
Perhitungan progress bar user diubah dari Query SQL (`$this->levels()->where(...)`) menjadi **Collection Filtering** di RAM.
- **Dampak**: CPU Database menjadi sangat ringan karena kalkulasi logic dilakukan di layer Aplikasi (PHP), yang jauh lebih mudah di-scale.

### 3. Caching Berbasis Waktu
Data statis seperti "Daftar Level" dan "Konten Materi" diset menggunakan `Cache::remember` selama 60 menit.
- **Lokasi Code**: `LevelController.php`
- **Dampak**: User ke-2 hingga ke-500 tidak akan memukul database untuk mengambil data level, melainkan mengambil dari Cache (File/Redis), yang super cepat.

---

## ⚡ Setup Load Testing (k6)

Kami menyertakan script untuk menguji ketahanan server menggunakan **k6**.

### Prasyarat
Install k6 di komputer Anda (Windows):
```powershell
winget install k6
```

### Cara Menjalankan Test (500 User Simultan)
Kami telah menyediakan script `load-test-500-users.js`.

1. Buka Terminal di folder project.
2. Jalankan perintah berikut:
   ```bash
   k6 run load-test-500-users.js
   ```

### Script k6 untuk 500 User (`load-test-500-users.js`)
Berikut adalah isi script yang bisa Anda gunakan/modifikasi:

```javascript
import http from 'k6/http';
import { check, sleep } from 'k6';

export const options = {
    // Simulasi 500 user secara simultan
    vus: 500,
    duration: '1m', // Jalankan selama 1 menit
    thresholds: {
        http_req_failed: ['rate<0.01'], // Error harus di bawah 1%
        http_req_duration: ['p(95)<2000'], // 95% request harus di bawah 2 detik
    },
};

export default function () {
    // Sesuaikan URL dengan environment Anda
    const url = 'http://localhost/muzzaki/public/run-code';

    const res = http.get(url);

    check(res, {
        'is status 200': (r) => r.status === 200,
        'verify page content': (r) => r.body && r.body.includes('Run Code'),
    });

    sleep(1); 
}
```

> **Catatan Server**: Untuk 500 user, pastikan `SESSION_DRIVER` dan `CACHE_STORE` di `.env` menggunakan `database` atau `redis`. Jangan gunakan `file` driver.
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
    // Ganti URL ini dengan URL Production atau Local IP Anda
    // Jangan gunakan localhost jika menjalankan k6 dari mesin lain/container berbeda
    const url = 'http://localhost/muzzaki/public/run-code';

    const res = http.get(url);

    // Cek status response
    check(res, {
        'is status 200': (r) => r.status === 200,
        // Pastikan konten halaman termuat (indikator tidak white screen error)
        'verify page content': (r) => r.body && r.body.includes('Run Code'),
    });

    // Jeda random antara 1-3 detik untuk simulasi perilaku user nyata
    sleep(Math.random() * 2 + 1);
}

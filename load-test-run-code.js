import http from 'k6/http';
import { check, sleep } from 'k6';

export const options = {
    vus: 50,
    duration: '30s',
};

export default function () {
    // The user requested to test "making HTML Hello World with blue background"
    // Since the current implementation is client-side only, we test the page load.
    // If there was a backend endpoint, we would POST the data here.

    const res = http.get('http://localhost/muzzaki/public/run-code');

    if (res.status !== 200) {
        console.error(`Request failed. Status: ${res.status}`);
    }

    check(res, {
        'is status 200': (r) => r.status === 200,
        'verify page content': (r) => r.body && r.body.includes('Run Code'),
    });

    sleep(1);
}

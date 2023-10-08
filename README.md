# Jepara Crafted

Jepara Crafted adalah aplikasi e-commerce sederhana yang memungkinkan Anda menjelajahi dan membeli produk furnitur.

## Cara Menjalankan Aplikasi

### Prasyarat

-   PHP 8.1 atau versi yang lebih tinggi.
-   Composer
-   Node.js
-   NPM atau Yarn
-   Laravel (instalasi dan konfigurasi sudah dilakukan)

### Langkah-langkah Instalasi

1. Clone repositori ini ke dalam direktori lokal Anda.
2. Instal semua dependensi PHP dengan menjalankan: `composer install`.
3. Duplikat file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database Anda.
4. Generate kunci aplikasi dengan perintah: `php artisan key:generate`.
5. Migrate database dengan perintah: `php artisan migrate`.
6. Jalankan server Laravel: `php artisan serve`.
7. Pindah ke direktori `resources` dalam proyek Anda: `cd resources`.
8. Instal semua dependensi JavaScript dengan menjalankan: `npm install` atau `yarn install`.
9. Jalankan server Node.js: `npm run dev` atau `yarn dev`.

Aplikasi sekarang dapat diakses di `http://localhost:8000`.

## Kontribusi

Kami mengundang kontribusi dari komunitas. Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti panduan kontribusi yang ada dalam file [CONTRIBUTING.md](CONTRIBUTING.md).

## Lisensi

Aplikasi ini dilisensikan di bawah Lisensi MIT. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

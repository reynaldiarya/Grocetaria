# Grocetaria: Aplikasi Toko Kelontong Berbasis Laravel

**Grocetaria** adalah aplikasi web untuk toko kelontong modern yang dirancang menggunakan framework Laravel. Proyek ini bertujuan untuk memenuhi kebutuhan pelanggan dengan cara yang cepat, efisien, dan user-friendly. Proyek ini dibuat sebagai bagian dari tugas Strategi dan Pengembangan Sistem Informasi (SPSI).

## Fitur Utama

- **Tampilan User-Friendly**: Antarmuka yang bersih dan intuitif untuk mempermudah navigasi pelanggan.
- **Katalog Produk**: Menampilkan daftar produk yang tersedia dengan informasi seperti harga, deskripsi, dan gambar.
- **Keranjang Belanja**: Fitur untuk menambahkan, mengedit, dan menghapus item dari keranjang belanja.
- **Pencarian dan Filter**: Memungkinkan pelanggan mencari produk tertentu dan menyaring hasil berdasarkan kategori atau harga.
- **Responsif**: Desain yang optimal untuk perangkat desktop dan mobile.

## Teknologi yang Digunakan

- **Laravel**: Framework PHP untuk pengembangan web.
- **Blade Templating**: Untuk pembuatan halaman dinamis.
- **MySQL**: Basis data untuk menyimpan data produk, pengguna, dan transaksi.
- **Bootstrap**: Untuk desain antarmuka pengguna.
- **JavaScript**: Untuk fitur interaktif tambahan.

## Cara Menjalankan Proyek

1. Clone repository ini ke komputer Anda:
   ```bash
   git clone https://github.com/reynaldiarya/Grocetaria.git
   ```
2. Buka folder proyek:
   ```bash
   cd grocetaria
   ```
3. Instal dependensi Laravel menggunakan Composer:
   ```bash
   composer install
   ```
4. Buat file `.env` dengan konfigurasi database Anda:
   ```
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Migrasi database:
   ```bash
   php artisan migrate
   ```
7. Jalankan server lokal Laravel:
   ```bash
   php artisan serve
   ```
8. Akses aplikasi di browser Anda melalui URL:
   ```
   http://localhost:8000
   ```

## Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT. Anda bebas untuk menggunakan, mengedit, dan mendistribusikannya dengan atribusi yang sesuai.

---

**Catatan:** Proyek ini mencakup front-end. Pengembangan tambahan dapat dilakukan untuk memperluas fitur sesuai kebutuhan.


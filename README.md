
# MVC PHP Native - Data Mata Kuliah

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller (MVC) pada PHP Native dengan data mata kuliah.

## Kebutuhan

- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti Laragon atau XAMPP
- Git

## Instalasi

1. Salin project ke folder web server.
2. Import database mata kuliah melalui file SQL yang tersedia di folder `database/`.
3. Sesuaikan koneksi database pada `config/database.php`.
4. Jalankan Laragon dan pastikan web server serta MySQL aktif.
5. Buka aplikasi melalui browser menggunakan alamat:

   `http://localhost/Mata_Kuliah/public/index.php`

## Struktur MVC

- `app/models/` : mengelola akses dan operasi data mata kuliah.
- `app/controllers/` : mengatur alur request dan menghubungkan Model dengan View.
- `app/views/` : menampilkan halaman aplikasi dalam bentuk HTML.
- `config/` : menyimpan konfigurasi koneksi database.
- `database/` : menyimpan file SQL untuk struktur dan data awal database.
- `public/` : menjadi entry point aplikasi.

## Data Mata Kuliah

Data yang dikelola dalam aplikasi meliputi:

- Kode Mata Kuliah
- Nama Mata Kuliah
- SKS
- Dosen Pengampu
- Program Studi

## Fitur

- Menampilkan daftar mata kuliah.
- Menambahkan data mata kuliah.
- Mengubah data mata kuliah.
- Menghapus data mata kuliah.

## Histori Git

Gunakan perintah berikut untuk melihat riwayat pengembangan project:

`git log --oneline --graph --decorate`

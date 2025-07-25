# sistem-login-registrasi-php
Aplikasi web sederhana untuk menangani registrasi dan login pengguna menggunakan PHP dan MySQL, lengkap dengan manajemen sesi untuk melindungi halaman.

## ✨ Fitur Utama
-   **Registrasi Pengguna**: Pengguna dapat membuat akun baru dengan `username`, `password`, dan `nama`.
-   **Keamanan Password**: Password pengguna di-hash menggunakan `password_hash()` sebelum disimpan ke database untuk keamanan.
-   **Login Pengguna**: Sistem memverifikasi kredensial pengguna (`username` dan `password`) menggunakan `password_verify()`.
-   **Manajemen Sesi**: Menggunakan sesi PHP (`$_SESSION`) untuk menjaga status login pengguna dan melindungi halaman dasbor.
-   **Halaman Terproteksi**: Halaman dasbor hanya bisa diakses oleh pengguna yang sudah login.
-   **Logout**: Pengguna dapat keluar dengan aman, yang akan menghancurkan sesi aktif.

## 🚀 Teknologi yang Digunakan
-   **Backend**: PHP
-   **Database**: MySQL / MariaDB
-   **Frontend**: HTML & Bootstrap 5

## 🗄️ Struktur Database
Proyek ini memerlukan satu tabel bernama `users` di dalam database.
| Nama Kolom | Tipe Data      | Keterangan                             |
| ---------- | -------------- | -------------------------------------- |
| `id`       | `INT(11)`      | **Primary Key** dengan `AUTO_INCREMENT`|
| `username` | `VARCHAR(50)`  | Nama pengguna (unik)                   |
| `password` | `VARCHAR(255)` | Password yang sudah di-hash            |
| `nama`     | `VARCHAR(100)` | Nama lengkap pengguna                  |

**SQL untuk membuat tabel:**
```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

## ⚙️ Cara Instalasi & Menjalankan Proyek
1.  **Database Setup**:
    -   Buat database baru (misalnya `pertemuan11`) di phpMyAdmin.
    -   Jalankan kueri SQL di atas untuk membuat tabel `users`.

2.  **Web Server**:
    -   *Clone* atau unduh repositori ini dan letakkan di dalam folder `htdocs` (jika menggunakan XAMPP).

3.  **Konfigurasi**:
    -   Buka file `config.php` dan sesuaikan nama database (`$database`) jika kamu menggunakan nama yang berbeda.

4.  **Menjalankan Aplikasi**:
    -   Jalankan modul Apache dan MySQL dari XAMPP Control Panel.
    -   Buka browser dan akses `http://localhost/[nama-folder-proyek]/register.php` untuk membuat akun baru.

---

**luqmanaru**

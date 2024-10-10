# Laravel Security Enhancements Project

## Deskripsi

Proyek ini merupakan aplikasi web yang dibangun menggunakan framework Laravel, yang dirancang untuk mendemonstrasikan berbagai fitur keamanan dan pengelolaan konten. Dalam dunia yang semakin terhubung, penting bagi pengembang untuk memahami dan menerapkan praktik keamanan terbaik untuk melindungi data pengguna dan mencegah serangan.

Aplikasi ini menawarkan fitur-fitur seperti pengelolaan artikel, komentar, pengaturan profil pengguna, dan notifikasi keamanan. Melalui aplikasi ini, pengguna dapat membuat, mengedit, dan menghapus artikel, serta menambahkan komentar pada artikel yang ada. Proyek ini juga dilengkapi dengan sistem autentikasi pengguna, yang memungkinkan pengguna untuk mendaftar, login, dan mengelola profil mereka.

Salah satu fitur unggulan dari aplikasi ini adalah pengiriman notifikasi kepada pengguna ketika ada login dari perangkat atau alamat IP baru, menambah lapisan keamanan tambahan untuk melindungi akun pengguna.

### Fitur Utama

- **Pengelolaan Pengguna:**
  - Registrasi pengguna baru
  - Login dan logout pengguna
  - Pengaturan profil pengguna yang dapat diperbarui

- **Pengelolaan Artikel:**
  - Membuat, mengedit, dan menghapus artikel
  - Menampilkan daftar artikel dengan detail penulis

- **Komentar:**
  - Menambahkan komentar pada artikel
  - Menghapus komentar yang telah ditambahkan

- **Notifikasi Keamanan:**
  - Mengirim notifikasi melalui email kepada pengguna saat login dari perangkat baru
  - Mencatat alamat IP terakhir yang digunakan untuk login

### Teknologi yang Digunakan

- **Laravel**: Framework PHP untuk membangun aplikasi web.
- **MySQL**: Database untuk menyimpan data pengguna, artikel, dan komentar.
- **Bootstrap**: Framework CSS untuk mempercepat pengembangan antarmuka pengguna.
- **Composer**: Manajer paket untuk PHP yang digunakan untuk mengelola ketergantungan proyek.

### Instalasi

Untuk menginstal dan menjalankan proyek ini, ikuti langkah-langkah berikut:

1. **Klon Repository**

```bash
   git clone https://github.com/username/repo-name.git
   cd repo-name
```
2. Instal Ketergantungan
Pastikan Anda telah menginstal Composer, kemudian jalankan:
```
composer install
```
3. Konfigurasi Environment
Salin file `.env.example` ke `.env`:
```
cp .env.example .env
```
Kemudian, atur koneksi database Anda di file `.env`.

4. Migrasi Database
Jalankan migrasi untuk membuat tabel di database:
```
php artisan migrate
```
5. Menjalankan Aplikasi
Setelah semua konfigurasi selesai, Anda dapat menjalankan server lokal menggunakan perintah berikut:
```
php artisan serve
```
Akses aplikasi di `http://localhost:8000`.

## Kesimpulan
Proyek ini merupakan contoh penerapan prinsip keamanan dalam pengembangan aplikasi web menggunakan Laravel. Dengan menambahkan berbagai fitur seperti pengelolaan pengguna, artikel, komentar, dan notifikasi keamanan, proyek ini bertujuan untuk memberikan pemahaman yang lebih baik tentang bagaimana mengamankan aplikasi web dan melindungi data pengguna.

## Hak Cipta
Hak cipta sepenuhnya dimiliki oleh **PT. PwnOsec Technologies Ltd.** dengan semua hak yang terkait. Tidak ada bagian dari perangkat lunak ini, baik dalam bentuk kode sumber, dokumentasi, maupun komponen lainnya, yang boleh didistribusikan, dimodifikasi, atau digunakan untuk tujuan komersial tanpa persetujuan tertulis dari pemilik hak cipta.

### Tanggal Penerbitan
Hak cipta ini berlaku mulai dari tanggal penerbitan proyek ini, dan akan diperbarui secara berkala oleh **PT. PwnOsec Technologies Ltd.** untuk memastikan perlindungan hukum yang sesuai.

## Lisensi Penggunaan
Proyek ini dilisensikan di bawah model lisensi berikut:

1. **Penggunaan Komersial:**
   Penggunaan komersial perangkat lunak ini hanya diizinkan bagi pihak-pihak yang telah mendapatkan lisensi resmi dari PT. PwnOsec Technologies Ltd.

2. **Penggunaan Pribadi:**
   Anda diizinkan untuk mempelajari dan mengkloning proyek ini hanya untuk penggunaan pribadi dan edukasi. Penggunaan dalam skala komersial, redistribusi, atau penjualan kembali perangkat lunak ini memerlukan izin resmi.

3. **Modifikasi:**
   Modifikasi diperbolehkan hanya untuk penggunaan internal dan pribadi. Setiap modifikasi yang dilakukan tidak boleh didistribusikan atau dijual tanpa persetujuan dari PT. PwnOsec Technologies Ltd.

## Kontak
Jika Anda memiliki pertanyaan terkait penggunaan, lisensi, atau memerlukan izin penggunaan komersial, silakan hubungi kami di:

- **Email:** info@pwnosec.com
- **Situs Web:** [www.pwnosec.com](http://www.pwnosec.com)
- **Alamat Kantor:**
  PT. PwnOsec Technologies Ltd.  
  Jl. Keamanan Siber No. 123, Jakarta, Indonesia

---
Hak cipta © 2024 **PT. PwnOsec Technologies Ltd.**. Semua hak dilindungi undang-undang.




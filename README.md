# Sistem Pengelolaan Alat Pertanian

Projek ini merupakan tugas UTS Pemrograman Web (PWEB) 2025/2026.  
Aplikasi ini dibuat menggunakan Laravel sebagai framework utama tanpa starter kit, sesuai dengan ketentuan UTS.

------------------------------------------------------------------------------------------------------------------------------

## Deskripsi Umum

Website ini dirancang untuk mengelola informasi alat-alat pertanian dengan tampilan sederhana dan interaktif.  
Sistem terdiri dari beberapa halaman utama: Login, Dashboard, Pengelolaan, dan Profile.  
Data pengguna dikirim menggunakan Request Parameter, dan data alat pertanian diatur melalui controller.

------------------------------------------------------------------------------------------------------------------------------

## Fitur Utama

### 1. Login
- Form login sederhana dengan input username dan password.
- Setelah login, sistem akan mengarahkan ke halaman dashboard sambil membawa `username` melalui query parameter.

### 2. Dashboard
- Menampilkan ucapan selamat datang kepada pengguna sesuai `username` yang diinput di halaman login.
- Memuat deskripsi singkat tentang sistem.

### 3. Pengelolaan Alat
- Menampilkan daftar alat pertanian dalam bentuk tabel.
- Data alat didefinisikan di controller dalam bentuk array (tanpa database).
- Tabel menampilkan kolom: No, Nama Alat, Kategori, dan Stok.

### 4. Profile
- Menampilkan informasi pengguna: Nama, Umur, Status, dan Keterangan.
- Foto profil menggunakan ikon netral (tidak menunjukkan gender).

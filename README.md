CRUD Pelanggan Kolam Renang

Deskripsi

Aplikasi ini merupakan sistem sederhana berbasis Laravel yang digunakan untuk mengelola data pelanggan pada kolam renang.
Sistem ini memiliki fitur CRUD (Create, Read, Update, Delete) untuk mempermudah pengelolaan data pelanggan.



Fitur

1. Menambahkan data pelanggan
2. Menampilkan data pelanggan
3. Mengedit data pelanggan
4. Menghapus data pelanggan


Struktur Data Pelanggan

Data yang dikelola dalam sistem ini meliputi:

* Nama Pelanggan
* Jenis Kelamin
* No HP
* Jenis Tiket
* Tanggal Masuk
* Jumlah Orang
* Total Bayar


Teknologi yang Digunakan

1. PHP (Laravel Framework)
2. MySQL
3. Blade Template


Cara Instalasi

1. Clone Repository
git clone https://github.com/anggunsucipranita/crud-kolam-renang.git

2. Masuk ke Folder Project
cd crud-kolam-renang

3. Install Dependency
composer install

4. Copy File Environment
cp .env.example .env

5. Konfigurasi Database
Buka file `.env`, lalu sesuaikan:
DB_DATABASE=kasir_kolam
DB_USERNAME=root
DB_PASSWORD=

6. Generate Application Key
php artisan key:generate

7. Migrasi Database
php artisan migrate

8. Jalankan Server
php artisan serve

9. Akses Aplikasi
http://127.0.0.1:8000/pelanggan


Catatan

* Pastikan XAMPP / MySQL sudah aktif
* Pastikan PHP & Composer sudah terinstall


Author
Anggun Suci Pranita

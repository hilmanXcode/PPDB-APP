<p align="center">
<a href="http://smkpgritelagasari1.sch.id" target="_blank"><img src="https://ik.imagekit.io/harioblackid99/logo_smk_new.png?updatedAt=1704296169484" width="200" height="200" alt="logo_sekolah" /></a>
</p>
<p align="center">
<strong>SMK PGRI TELAGASARI</strong>
</p>

## Tentang Aplikasi

Aplikasi ini adalah manajemen PPDB berbasis website yang dibangun dan dikembangkan dengan Framework Laravel. fitur-fitur pada aplikasi PPDB-APP antara lain :

- Website Sekolah
- Monitoring pendaftaran
- Manajemen Gelombang (Pendaftaran dapat dipisahkan berdasarkan periode)
- Export data ke File Excel

## Instalasi
Jalankan perintah berikut untuk menyalin repository dari GitHub
```
git clone https://github.com/hilmanXcode/PPDB-APP.git
```
Jalankan perintah berikut untuk menginstal dependensi php
```
composer install
```
Jalankan perintah berikut untuk mengatur _environment variable_
```
cp .env.example .env
```
Pastikan Anda telah membuat database baru bernama `db_ppdb_app` di MySQL dan silakan tambahkan di file `.env`. <br>
Jalankan perintah berikut untuk membuat _key_ untuk web app Anda
```
php artisan key:generate
```
Jalankan perintah berikut untuk membuat skema database
```
php artisan migrate:fresh --seed
```
Terakhir, jalankan perintah berikut untuk menyalakan web server bawaan laravel 
```
php artisan serve
```
Setelah perintah di atas dijalankan, web app anda bisa sudah bisa diakses

## Login Credetials

| Email      | admin@smk.com |
|------------|-----------------|
| Password   | 123456          |

## Team Pengembang
- [hilmanXcode](https://github.com/hilmanXcode) MUHAMMAD HILMAN NURSALAM - XII RPL 2
- [DH17-X7](https://github.com/DH17-X7) ADITTIA SULAEMAN - XII RPL 1
- [Samunee](https://github.com/Samunee) FITRA MUHAMMAD ANUGRAH - X PPLG 3
- FIRZA GIAN MUHARRAM - X PPLG 3


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

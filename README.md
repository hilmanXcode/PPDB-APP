<p align="center">
<a href="http://smkpgritelagasari1.sch.id" target="_blank"><img src="https://ik.imagekit.io/harioblackid99/logo_smk_new.png?updatedAt=1704296169484" width="200" height="200" alt="logo_sekolah" /></a>
</p>
<p align="center">
<strong>SMK PGRI TELAGASARI</strong>
</p>

## Tentang Aplikasi

Aplikasi ini adalah manajemen PPDB berbasis website yang di bangun dan di kembangkan dengan Framework Laravel. Fitur-fitur pada aplikasi Sekolahku antara lain :

- Website Sekolah
- Monitoring pendaftaran
- Manajemen Gelombang (Pendaftaran dapat dipisahkan berdasarkan periode)
- Ekpor data ke File Excel

## Instalasi

* Install [Composer](https://getcomposer.org/download)
* Clone the repository: `git clone https://github.com/andes2912/sekolahku`
* Install dependencies: `composer install`
* Run `cp .env.example .env` for create .env file
* Create new database: `db_ppdb_app`
* Run `php artisan migrate:fresh --seed` for migration database
* Run `php artisan storage:link` for create folder storage

## Login Credentials
* email : admin@smk.com
* Password : 123456

## Team Pengembang
- [hilmanXcode](https://github.com/hilmanXcode) MUHAMMAD HILMAN NURSALAM - XII RPL 2
- [DH17-X7](https://github.com/DH17-X7) ADITTIA SULAEMAN - XII RPL 1
- [Samunee](https://github.com/Samunee) FITRA MUHAMMAD ANUGRAH - X PPLG 3
- FIRZA GIAN MUHARRAM - X PPLG 3


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

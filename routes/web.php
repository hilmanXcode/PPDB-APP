<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::group(['prefix' => '/'], function($id = null){
    Route::get('/', [ClientController::class, 'index'])->name('/');
    Route::get('/daftar', [ClientController::class, 'daftar'])->name('daftar');
    Route::post('/daftar/yes', [ClientController::class, 'yes_daftar'])->name('yes_daftar');

    Route::get('/cek', [ClientController::class, 'cek'])->name('cek');
    Route::get('/cek/{id}/download', [ClientController::class, 'download'])->name('download', $id);

    Route::get('/aboutus', [ClientController::class, 'aboutus'])->name('aboutus');
    Route::get('/informasi', [ClientController::class, 'informasi'])->name('informasi');
    Route::get('/informasi/{id}/baca', [ClientController::class, 'baca'])->name('baca', $id);
    Route::get('/faq', [ClientController::class, 'faq'])->name('faq');
    Route::get('/contactus', [ClientController::class, 'contactus'])->name('contactus');



    Route::get('/foto', [ClientController::class, 'foto'])->name('foto');
    Route::get('/video', [ClientController::class, 'video'])->name('video');
    Route::get('/help', [ClientController::class, 'help'])->name('help');
    Route::post('/hub', [ClientController::class, 'hub'])->name('hub');

});

Auth::routes(['register' => false]); // LOGIN

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home/pendaftaran'], function($id = null){
    Route::get('daftar_admin', [AdminController::class, 'daftar_admin'])->name('daftar_admin');
    Route::post('daftar_admin/kirim_data', [AdminController::class, 'kirim_data'])->name('kirim_data');

    Route::get('pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
    Route::get('pendaftar/{id}/lihat', [AdminController::class, 'lihat'])->name('lihat', $id);
    Route::get('pendaftar/{id}/hapus_siswa', [AdminController::class, 'hapus_siswa'])->name('hapus_siswa', $id);
    Route::get('pendaftar/{id}/acc', [AdminController::class, 'acc'])->name('acc', $id);
    Route::get('pendaftar/{id}/daful', [AdminController::class, 'daful'])->name('daful', $id);
    Route::post('pendaftar/acc_massal', [AdminController::class, 'acc_massal'])->name('acc_massal');

});

Route::group(['prefix' => 'home/sekolah'], function($id = null){
    Route::post('/add_jurusan', [AdminController::class, 'add_jurusan'])->name('add_jurusan');
    Route::post('/add_gelombang', [AdminController::class, 'add_gelombang'])->name('add_gelombang');
    Route::get('/informasi_slide', [AdminController::class, 'informasi_slide'])->name('informasi_slide');    
    Route::post('/informasi_slide/post', [AdminController::class, 'post_slide'])->name('post_slide');
    Route::get('/informasi_slide/{id}/hapus_slide', [AdminController::class, 'hapus_slide'])->name('hapus_slide', $id);

    Route::get('/tentang_sekolah', [AdminController::class, 'tentang_sekolah'])->name('tentang_sekolah');
    Route::post('/tentang_sekolah/post', [AdminController::class, 'upload_tentang_sekolah'])->name('upload_tentang_sekolah');

    Route::get('/informasi_sekolah', [AdminController::class, 'informasi_sekolah'])->name('informasi_sekolah');
    Route::post('/informasi_sekolah/post', [AdminController::class, 'upload_informasi'])->name('upload_informasi');

    Route::get('/informasi_sekolah/{id}/hapus_informasi', [AdminController::class, 'hapus_informasi'])->name('hapus_informasi', $id);
    Route::get('/galeri', [AdminController::class, 'galeri'])->name('galeri');
    Route::post('/galeri/upload_foto', [AdminController::class, 'upload_foto'])->name('upload_foto');

    Route::post('/galeri/upload_video', [AdminController::class, 'upload_video'])->name('upload_video');

    Route::get('/galeri/{id}/hapus_foto', [AdminController::class, 'hapus_foto'])->name('hapus_foto', $id);
    Route::get('/galeri/{id}/hapus_video', [AdminController::class, 'hapus_video'])->name('hapus_video', $id);

    Route::get('/kontak_admin', [AdminController::class, 'kontak_admin'])->name('kontak_admin');
    Route::get('/kontak_admin/{id}/dibaca', [AdminController::class, 'dibaca'])->name('dibaca', $id);
    Route::get('/kontak_admin/{id}/hapus_pesan', [AdminController::class, 'hapus_pesan'])->name('hapus_pesan', $id);
});

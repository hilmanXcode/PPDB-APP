<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table = 'pendaftar';
    protected $guarded = ['id'];
    protected $filable = [
        'jurusan',
        'nama_siswa',
        'nik',
        'tempat_lahir',
        'jenis_kelamin',
        'tanggal_lahir',
        'asal_sekolah',
        'agama',
        'hobi',
        'cita',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'status_ayah',
        'status_ibu',
        'hp_ayah',
        'hp_ibu',
        'hp_siswa',
        'alamat',
        'daful'
    ];
}

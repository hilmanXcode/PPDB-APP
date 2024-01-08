<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftar>
 */
class PendaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Pendaftar::class;

    public function definition(): array
    {
        return [
            'gelombang' => $this->faker->randomElement(['Gelombang_1', 'Gelombang_2', 'Gelombang_3', 'Gelombang_4']),
            'jurusan'=> $this->faker->randomElement($array = array('Rekayasa Perangkat Lunak', 'Teknik Mesin Industri', 'Teknik Pengelasan')),
            'nama_siswa'=> $this->faker->name(),
            'nik'=> $this->faker->nik(),
            'tempat_lahir'=> $this->faker->city(),
            'jenis_kelamin'=> $this->faker->randomElement($array = ['Laki Laki','Perempuan']),
            'tanggal_lahir'=> $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'asal_sekolah'=> $this->faker->sentence,
            'agama'=> $this->faker->randomElement($array = ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            'hobi'=> $this->faker->word(),
            'cita'=> $this->faker->word(),
            'nama_ayah'=> $this->faker->name(),
            'pekerjaan_ayah'=> $this->faker->jobTitle(),
            'nama_ibu'=> $this->faker->name(),
            'pekerjaan_ibu'=> $this->faker->jobTitle(),
            'status_ayah'=> $this->faker->randomElement($array = ['Ada','Tidak']),
            'status_ibu'=> $this->faker->randomElement(['Ada','Tidak']),
            'hp_ayah'=> $this->faker->phoneNumber(),
            'hp_ibu'=> $this->faker->phoneNumber(),
            'hp_siswa'=> $this->faker->phoneNumber(),
            'rekomendasi'=> "",
            'alamat'=> $this->faker->address(),
            'acc'=> $this->faker->randomElement(['0','1']),
            'daful'=> $this->faker->randomElement(['0','1'])
        ];
    }
}

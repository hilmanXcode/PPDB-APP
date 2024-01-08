<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jurusan'=> $this->faker->randomElement(['Rekayasa Perangkat Lunak', 'Teknik Mesin Industri', 'Teknik Pengelasan']),
            'nama_siswa'=> $this->faker->name(),
            'nik'=> $this->faker->nik(),
            'tempat_lahir'=> $this->faker->city(),
            'jenis_kelamin'=> $this->faker->randomElement(['Laki Laki','Perempuan']),
            'tanggal_lahir'=> $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'asal_sekolah'=> $this->faker->sentence,
            'agama'=> $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            'hobi'=> $this->faker->words(),
            'cita'=> $this->faker->words(),
            'nama_ayah'=> $this->faker->name(),
            'pekerjaan_ayah'=> $this->faker->jobTitle(),
            'nama_ibu'=> $this->faker->name(),
            'pekerjaan_ibu'=> $this->faker->jobTitle(),
            'status_ayah'=> $this->faker->randomElement(['Ada','Tidak']),
            'status_ibu'=> $this->faker->randomElement(['Ada','Tidak']),
            'hp_ayah'=> $this->faker->phoneNumber(),
            'hp_ibu'=> $this->faker->phoneNumber(),
            'hp_siswa'=> $this->faker->phoneNumber(),
            'rekomendasi'=> $this->faker->randomElement([]),
            'alamat'=> $this->faker->address(),
            'daful'=> $this->faker->randomElement(['0','1'])
        ];
    }
}

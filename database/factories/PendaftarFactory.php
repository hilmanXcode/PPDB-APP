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
        $path = storage_path('app/datasekolah.json');
        $data = json_decode(file_get_contents($path), true);
        $asal_sekolah = array_map(function ($item) { return $item['sekolah']; }, $data);
        return [
            'gelombang' => $this->faker->randomElement(['Gelombang_1', 'Gelombang_2', 'Gelombang_3', 'Gelombang_4']),
            'jurusan'=> $this->faker->randomElement($array = array('Rekayasa Perangkat Lunak', 'Teknik Mesin Industri', 'Teknik Pengelasan')),
            'nama_siswa'=> $this->faker->name(),
            'nik'=> $this->faker->nik(),
            'tempat_lahir'=> $this->faker->city(),
            'jenis_kelamin'=> $this->faker->randomElement($array = ['Laki Laki','Perempuan']),
            'tanggal_lahir'=> $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'asal_sekolah' => $this->faker->randomElement($asal_sekolah),
            'agama'=> $this->faker->randomElement($array = ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            'hobi'=> $this->faker->randomElement(['Membaca','Memasak','Berkebun','Melukis','Fotografi','Hiking','Menari','Menulis','Bersepeda','Menggambar','Menyanyi','Merajut','Yoga','Traveling','Bermain Gitar','Bermain Piano','Bermain Catur','Selancar','Pengrajinan Kayu','Meditasi','Memanggang','Lari','Ski','Renang','Kaligrafi','Pengolahan Tanah Liat','Gaming','Observasi Burung','Pematung','Astrofotografi','Panahan','Naik Kuda','Terbang Layang-layang','Pengolahan Logam','Trik Sulap','Origami','Parkour','Panjat Tebing','Skydiving','Tai Chi','Pahat Kayu','Zipline','Berjemur','Belajar Bahasa Baru','Bermain Board Game','Bonsai','Mengumpulkan Koin','Mengumpulkan Perangko','Perjalanan Jalan Kaki','Mengikuti Kompetisi Memasak','Pemrograman','Blogging','Menonton Film','Belajar Musik','Mengumpulkan Action Figure','Melatih Binatang Peliharaan','Belajar Sejarah','Merakit Model Kapal','Memelihara Aquarium','Mengunjungi Museum','Menghadiri Konser','Belajar Fotografi','Melakukan Seni Kerajinan','Menghadiri Festival Musik','Membuat Aplikasi Mobile','Memahami Astronomi','Mengikuti Kursus Online','Belajar Bahasa Isyarat','Menjadi Relawan','Mengikuti Kejuaraan Esport','Mengikuti Pelatihan Olahraga','Membuat Kerajinan Tangan','Mendaki Gunung','Memahami Fisika','Mengikuti Kelas Seni','Menyelam','Mengikuti Kursus Yoga','Bermain Biliar','Melukis Lukisan Digital','Bermain Kendang','Melihat Bintang','Bermain Tenis','Memasak Kue','Mendengarkan Podcast','Membuat Video TikTok','Membuat Cerita Pendek','Menjelajahi Gua','Mendaki Tebing','Mengikuti Kelas Sains','Mendengarkan Musik Klasik',]),
            'cita'=> $this->faker->jobTitle(),
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
            'daful'=> $this->faker->randomElement(['0','1']),
            'created_at'=> $this->faker->dateTimeBetween('-2 months', '-10 days', 'Asia/Jakarta')
        ];
    }
}

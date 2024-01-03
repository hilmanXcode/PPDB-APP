<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'jajang',
            'email' => 'jajang@gmail.com',
            'password' => Hash::make('123456')
        ]);

        \App\Models\Tentang::factory()->create([
            'deskripsi_singkat' => 'Ini isi deskripsi',
            'tentang' => 'Tentang sekolah diisi disni'
        ]);
    }
}

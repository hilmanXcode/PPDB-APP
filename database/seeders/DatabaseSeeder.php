<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
            'name' => 'admin',
            'email' => 'admin@smk.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('tentang')->insert([
            'deskripsi_singkat' => 'Deskripsi tentang SMK PGRI Telagasari',
            'tentang' => 'tentang SMK PGRI Telagasari'
        ]);
    }
}

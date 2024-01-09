<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
        \App\Models\Pendaftar::factory()->count(200)->create();
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@smk.com',
            'password' => Hash::make('123456')
        ]);
        
        $data = [
            [
                'gelombang' => 'Gelombang_1',
                'status_gelombang' => 'Buka'
            ],
            [
                'gelombang' => 'Gelombang_2',
                'status_gelombang' => 'Tutup'
            ],
            [
                'gelombang' => 'Gelombang_3',
                'status_gelombang' => 'Tutup'
            ],
            [
                'gelombang' => 'Gelombang_4',
                'status_gelombang' => 'Tutup'
            ]
        ];

        DB::table('gelombang')->insert($data);
    }
    
}

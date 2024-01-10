<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class gelombangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

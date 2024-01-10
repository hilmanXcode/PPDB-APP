<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
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
        $toDelete = ['users','gelombang','pendaftar','informasi'];
        Model::unguard();
        foreach($toDelete as $table){
            DB::table($table)->truncate();
        }

        $this->call(InformasiSeeder::class);
        $this->call(gelombangSeeder::class);
        $this->call(pendaftarSeeder::class);
        $this->call(userSeeder::class);

        Model::reguard();
    }
    
}

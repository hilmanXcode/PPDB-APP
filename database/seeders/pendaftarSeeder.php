<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Pendaftar;

class pendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setdisk = Storage::disk('local');
        if($setdisk->missing('datasekolah.json') and $setdisk->missing('datahobi.json')){
            $convert= json_encode(getAPI());
            $setdisk->put('datasekolah.json',$convert);
        }
        $getdisk = Storage::get('datasekolah.json');
        $dataArray = json_decode($getdisk, true);
        for($i = 0; $i <= 99; $i++){
            Pendaftar::factory()->create([
            'asal_sekolah'=> $dataArray[$i]['sekolah'],
            'hobi'=> null,
                
            ]);

        }
    }
}

<?php
use Illuminate\Support\Facades\Http;

if (! function_exists('dateIndo')) {
    function dateIndo($variabel) {
        $month = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        return $variabel->created_at->format("j") . " " . $month[$variabel->created_at->format("n") - 1] . " " . $variabel->created_at->format("Y");
    }
}

if (!function_exists('getAPI')) {
    function getAPI() {
        $response = Http::get('https://api-sekolah-indonesia.vercel.app/sekolah/SMP?kab_kota=022100&page=1&perPage=100');
        $data = (array) $response->json('dataSekolah');
    
        return $data;
    }
}
?>
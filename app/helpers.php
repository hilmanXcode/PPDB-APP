<?php

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

?>
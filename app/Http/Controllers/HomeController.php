<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_pendaftar = Pendaftar::orderBy('created_at', 'DESC')->get();

        $data_lelaki = Pendaftar::where('jenis_kelamin', 'Laki Laki')->count();
        $data_perempuan = Pendaftar::where('jenis_kelamin', 'Perempuan')->count();

        $g1 = Pendaftar::where('gelombang', 'gelombang_1')->count();
        $g2 = Pendaftar::where('gelombang', 'gelombang_2')->count();
        $g3 = Pendaftar::where('gelombang', 'gelombang_3')->count();
        $g4 = Pendaftar::where('gelombang', 'gelombang_4')->count();
        $bdf = Pendaftar::where('acc', '1')->where('daful', '0')->count();
        $sdf = Pendaftar::where('acc', '1')->where('daful', '1')->count();
        $page = "dashboard";
        
        $belum_daful = Pendaftar::where('acc', '1')->where('daful', '0')->count();
        $belum_acc = Pendaftar::where('acc', '0')->count();
        $sudah_acc = Pendaftar::where('acc', '1')->count();
        $sudah_daful = Pendaftar::where('acc', '1')->where('daful', '1')->count();

        // echo count($belum_acc);
        // echo "<br/>";
        // echo $belum_acc_int_recent;
        // echo "<br/>";
        // echo $belum_accx;
        // dd($belum_accx);

        $chart = LarapexChart::pieChart()
            ->addData([$sudah_acc, $belum_acc, $sudah_daful])
            ->setLabels(['Sudah di ACC', 'Belum di ACC', 'Sudah Daftar Ulang']);

        return view('Dashboard/index', compact('g1', 'g2', 'g3', 'g4', 'bdf', 'sdf', 'page', 'chart', 'data_pendaftar', 'data_lelaki', 'data_perempuan', 'sudah_daful', 'belum_acc', 'sudah_acc', 'belum_daful'));
    }
}

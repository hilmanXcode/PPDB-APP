<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

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
        $g1 = Pendaftar::where('gelombang', 'gelombang_1')->count();
        $g2 = Pendaftar::where('gelombang', 'gelombang_2')->count();
        $g3 = Pendaftar::where('gelombang', 'gelombang_3')->count();
        $g4 = Pendaftar::where('gelombang', 'gelombang_4')->count();
        $bdf = Pendaftar::where('acc', '1')->where('daful', '0')->count();
        $sdf = Pendaftar::where('acc', '1')->where('daful', '1')->count();
        $page = "dashboard";

        return view('Dashboard/index', compact('g1', 'g2', 'g3', 'g4', 'bdf', 'sdf', 'page'));
    }
}

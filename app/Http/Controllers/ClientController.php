<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Tentang;
use App\Models\Gelombang;
use App\Models\Informasi;
use App\Models\Kontak;
use App\Models\Pendaftar;
use App\Models\Youtube;
use PDF;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $slide = Slider::all();
        $tentang = Tentang::first();
        $info = Informasi::orderBy('id', 'DESC')->limit(6)->get();


        $jp = Pendaftar::where('acc', '0')->where('daful', '0')->count();
        $jt = Pendaftar::where('acc', '1')->where('daful', '1')->count();
        $jj = Jurusan::count();

        return view('Client/index', compact(
            'slide',
            'tentang',
            'info',
            'jp',
            'jt',
            'jj',
        ));
    }
    public function daftar()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
      
       

        if($gelombang == null){
            $form = 'disabled';
            $button = 'type="button"';
        }elseif($gelombang->status_gelombang == 'Tutup'){
            $form = 'disabled';
            $button = 'type="button"';
        }elseif($gelombang->status_gelombang == 'Buka'){
            $form = '';
            $button = 'type="submit"';
        }
        return view('Client/daftar', compact('jurusan', 'gelombang', 'form', 'button'));
    }
    public function yes_daftar(Request $req)
    {
        $req->validate([
            'gelombang' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ayah' => 'required',
            'status_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'status_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'jurusan' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        $data = Pendaftar::create([
            'gelombang'     => $req->input('gelombang'),
            'nik'           => $req->input('nik'),
            'hobi'          => $req->input('hobi'),
            'cita'          => $req->input('cita'),
            'jurusan'       => $req->input('jurusan'),
            'nama_siswa'    => $req->input('nama_siswa'),
            'jenis_kelamin' => $req->input('jenis_kelamin'),
            'tempat_lahir'  => $req->input('tempat_lahir'),
            'tanggal_lahir' => $req->input('tanggal_lahir'),
            'asal_sekolah'  => $req->input('asal_sekolah'),
            'agama'         => $req->input('agama'),
            'nama_ayah'     => $req->input('nama_ayah'),
            'pekerjaan_ayah'=> $req->input('pekerjaan_ayah'),
            'nama_ibu'      => $req->input('nama_ibu'),
            'pekerjaan_ibu' => $req->input('pekerjaan_ibu'),
            'status_ayah'   => $req->input('status_ayah'),
            'status_ibu'    => $req->input('status_ibu'),
            'hp_ayah'       => $req->input('hp_ayah'),
            'hp_ibu'        => $req->input('hp_ibu'),
            'hp_siswa'      => $req->input('hp_siswa'),
            'rekomendasi'   => $req->input('rekomendasi'),
            'alamat'        => $req->input('alamat'),
        ]);
        return redirect()->back()->with('success', 'Sukses Melakukan Registrasi Online');
    }
    public function cek()
    {
        $data = Pendaftar::orderBy('id', 'DESC')->get();
        return view('Client/cek', compact('data'));
    }
    public function aboutus()
    {
        $data = Tentang::first();
        return view('Client/aboutus', compact('data'));
    }

    public function faq()    {
        return view('Client/faq');
    }

    public function contactus()    {
        return view('Client/contactus');
    }

    public function informasi()
    {
        $info = Informasi::orderBy('id', 'DESC')->limit(9)->get();
        return view('Client/informasi', compact('info'));
    }
    public function baca($id)
    {
        $data = Informasi::find($id);
        return view('Client/baca', compact('data'));
    }
    public function hub(Request $req)
    {
        $data = Kontak::create([
            'nama' => $req->input('nama'),
            'nomor_hp' => $req->input('nomor_hp'),
            'email' => $req->input('email'),
            'untuk' => $req->input('untuk'),
            'pesan' => $req->input('pesan')
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Mengirim Pesan, Terima Kasih');
    }
    public function foto()
    {
        $foto = Foto::all();
        return view('Client/foto', compact('foto'));
    }
    public function video()
    {
        $video = Youtube::all();
        return view('Client/video', compact('video'));
    }
    public function help()
    {
        return view('Client/tolong');
    }
    public function download($id)
    {
        $data = Pendaftar::find($id);
        $pdf = PDF::loadView('Client/pdf', compact('data'));
        //dd($data);
        //dd($pdf);
        return $pdf->stream('data.pdf');
    }
}
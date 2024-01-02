<?php

namespace App\Http\Controllers;

use FFI;
use Excel;
use App\Models\Foto;
use App\Models\Kontak;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Tentang;
use App\Models\Gelombang;
use App\Models\Informasi;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\Youtube as YT;
use Alaouy\Youtube\Facades\Youtube;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Pendaftaran
    public function daftar_admin()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
      
       

        if($gelombang == null){
            $form = 'disabled';
            $button = 'type="button"';
            $name = '';
        }elseif($gelombang->status_gelombang == 'Tutup'){
            $form = 'disabled';
            $button = 'type="button"';
            $name = '';
        }elseif($gelombang->status_gelombang == 'Buka'){
            $form = '';
            $button = 'type="submit"';
        }

        $page = "daftar_admin";
    
        return view('Dashboard/pendaftar/daftar', compact('jurusan', 'gelombang', 'form', 'button', 'page'));
    }
   

    public function kirim_data(Request $req)
    {
        $req->validate([
            'gelombang' => 'required',
            'nama_ayah' => 'required',
            'status_ayah' => 'required',
            'jenis_kelamin' => 'required',
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

        Pendaftar::create($req->all());

        return redirect()->back()->with('success', 'Sukses Menambahkan Siswa');
    }
    public function pendaftar()
    {
        $data_pendaftar = Pendaftar::orderBy('id', 'DESC')->where('acc', '0')->where('daful', '0')->paginate(5);
        $data_acc       = Pendaftar::orderBy('id', 'DESC')->where('acc', '1')->paginate(5);
        $belum_daful    = Pendaftar::orderBy('id', 'DESC')->where('acc', '1')->where('daful', '0')->paginate(5);
        $sudah_daful    = Pendaftar::orderBy('id', 'DESC')->where('acc', '1')->where('daful', '1')->paginate(5);
        $page = "pendaftar";
        
        return view('Dashboard/pendaftar/pendaftar', compact('data_pendaftar', 'data_acc', 'belum_daful', 'sudah_daful', 'page'));
    }

    public function acc($id)
    {
        $data = Pendaftar::find($id)->update([
            'acc' => 1
        ]);
        return redirect()->back()->with('success', 'Siswa Telah Di Acc');

    }

    
    public function daful($id)
    {
        $data = Pendaftar::find($id)->update([
            'daful' => 1
        ]);
        return redirect()->back()->with('success', 'Siswa Telah Daftar Ulang');

    }


    public function lihat($id)
    {
        $data = Pendaftar::find($id);
        $page = "pendaftar";
        return view('Dashboard/pendaftar/lihat', compact('data', 'page'));
    }

    public function hapus_siswa($id)
    {
        $data = Pendaftar::find($id)->delete();
        return redirect()->back()->with('success', 'Data Siswa Berhasil Di Hapus');
    }

    public function acc_massal(Request $req)
    {
        $cek = Pendaftar::where('gelombang', $req->gelombang)->first();
        if($cek == NULL){
            return redirect()->back()->with('error', 'Gelombang Tersebut Belum Ada');
        }else{
            $data = Pendaftar::where('gelombang', $req->gelombang)->update([
                'acc' => 1
            ]);
            return redirect()->back()->with('success', 'Gelombang Tersebut Telah Di Acc');
        }
      
    }

    // SEKOLAH

    public function add_jurusan(Request $req)
    {
        $data = Jurusan::create([
            'jurusan' => $req->jurusan,
            'deskripsi_jurusan' => $req->deskripsi_jurusan
        ]);
        return redirect()->back()->with('success', 'Sukses Menambahkan Jurusan');
    }
    public function add_gelombang(Request $req)
    {
        $req->validate([
            'gelombang' => 'required',
            'status_gelombang' => 'required'
        ]);
        $data = Gelombang::first();
        
        if($data == NULL){
            $data = Gelombang::create([
                'gelombang' => $req->gelombang,
                'status_gelombang' => $req->status_gelombang,
            ]);
            return redirect()->back()->with('success', 'Sukses Menambahkan Gelombang');

        }else{
            $data = Gelombang::first()->update([
                'gelombang' => $req->gelombang,
                'status_gelombang' => $req->status_gelombang,
            ]);
            return redirect()->back()->with('success', 'Sukses Update Gelombang');

        }
    }
    // 
    public function informasi_slide()
    {
        $data = Slider::orderBy('id', 'DESC')->get();
        return view('Dashboard/sekolah/slide', compact('data'));
    }
    public function post_slide(Request $req)
    {
       

        $file = $req->file('wallpaper');
 
		$nama_file = 'wallpaper_'.date('dmy').'_.'.$file->getClientOriginalExtension();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'slide';
		$file->move($tujuan_upload,$nama_file);
 
        $data = Slider::create([
            'judul' => $req->judul,
            'wallpaper' => $nama_file,
            'deskripsi_slider' => $req->deskripsi_slider,
        ]);
        return redirect()->back()->with('success', 'Sukses Menambah Slider');
    }
    public function hapus_slide($id)
    {
        $data = Slider::find($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus Slider');

    }
    public function tentang_sekolah()
    {
        $data = Tentang::first();
        $page = "tentang_sekolah";
        return view('Dashboard/sekolah/tentang', compact('data', 'page'));
    }
    public function upload_tentang_sekolah(Request $req)
    {

        $cek  = Tentang::first();
        if($cek == Null){
            Tentang::create($req->all());
            return redirect()->back()->with('success', 'Sukses Update Tentang Sekolah');
        }else{
            Tentang::latest()->first()->update($req->all());
            return redirect()->back()->with('success', 'Sukses Update Tentang Sekolah');
        }
       

    }
    public function informasi_sekolah()
    {
        $data = Informasi::orderBy('id', 'DESC')->get();
        return view('Dashboard/sekolah/informasi', compact('data'));
    }
    public function upload_informasi(Request $req)
    {
        $data = Informasi::create($req->all());
        return redirect()->back()->with('success', 'Sukses Upload Informasi Sekolah');

    }
    public function hapus_informasi($id)
    {
       $data = Informasi::find($id)->delete();
       return redirect()->back()->with('success', 'Sukses Menghapus Informasi Sekolah');
    }
    public function galeri()
    {
        $foto = Foto::all();
        $video = YT::all();
        return view('Dashboard/sekolah/galeri', compact('foto', 'video'));
    }

    public function upload_foto(Request $req)
    {
        $file = $req->file('foto');
        $nama_file = 'foto_'.date('d_m_y H:i:s').'_.'.$file->getClientOriginalExtension();
        $path = 'galeri';
        $file->move($path, $nama_file);

        $data = Foto::create([
            'judul' => $req->input('judul'),
            'foto'  => $nama_file
        ]);
        return redirect()->back()->with('success', 'Sukses Upload Foto Ke Galeri Sekolah');

    }
    public function upload_video(Request $req)
    {

        $video = Youtube::getVideoInfo($req->input('link'));
        $judul = $video->snippet->title;
        $channel = $video->snippet->channelTitle;

        $data = YT::create([
            'id_youtube' => $req->input('link'),
            'judul'      => $judul,
            'channel'    => $channel
        ]);
        return redirect()->back()->with('success', 'Sukses Upload Video Youtube Ke Galeri Sekolah');

    }
    public function hapus_foto($id)
    {
        $data = Foto::find($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus Foto Di Galeri Sekolah');

    }
    public function hapus_video($id)
    {
        $data = YT::find($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus Video Di Galeri Sekolah');

    }
    public function kontak_admin()
    {
        $data = Kontak::orderBy('id', 'DESC')->get();
        return view('Dashboard/sekolah/kontak', compact('data'));
    }
    public function dibaca($id)
    {
        
        $baca = Kontak::find($id);
        $baca->update([
            'status' => 1
        ]);
        return view('Dashboard/sekolah/baca', compact('baca'));

    }
    public function hapus_pesan($id)
    {
        $data = Kontak::find($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus Pesan');

    }
}

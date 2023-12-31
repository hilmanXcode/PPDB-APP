<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>

</head>
<body>
    <div class="container">

                <img src="" alt="">
        
    <table>
        <tr>
            <td><b>No Pendaftaran</b></td>
            <td>:</td>
            <td>2023 : {{$data->id}}</td>
        </tr>
        <tr>
            <td><b>Gelombang</b></td>
            <td>:</td>
            <td>{{ $data->gelombang }}</td>
        </tr>
        <tr>
            <td><b>Rekomendasi</b></td>
            <td>:</td>
            <td>{{ $data->rekomendasi }}</td>
        </tr>
        <tr>
            <td><b>Jurusan Di Ambil</b></td>
            <td>:</td>
            <td>{{ $data->jurusan }}</td>
        </tr>
        <tr>
            <td><b>Status Di Terima</b></td>
            <td>:</td>
            <td>@if($data->acc == '1' && $data->daful == '1' ) Selamat Untuk Ananda {{$data->nama_siswa}} Telah Di Terima Di SMK Telematika Indramayu.@endif</td>
        </tr>
        
</table>
<table>
        <tr>
           <td colspan="3" style="text-transform: uppercase;">
               <b>A. Identitas Pribadi</b> 
           </td>
           
        </tr>
        
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $data->nama_siswa }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $data->tempat_lahir }}, {{$data->tanggal_lahir}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $data->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $data->agama }}</td>
        </tr>
       
        <tr>
            <td>Alamat Siswa</td>
            <td>:</td>
            <td>{{ $data->alamat_siswa }}</td>
        </tr>
       
        <tr>
            <td>No Hp Siswa</td>
            <td>:</td>
            <td>{{ $data->hp_siswa }}</td>
        </tr>
       
         <tr>
            <td><b>Asal Sekolah</b></td>
            <td>:</td>
            <td>{{ $data->asal_sekolah }}</td>
        </tr>
         
    </table>
    <table  style="margin-top: 1em;">
        <tr>
           <td colspan="3" style="text-transform: uppercase;">
            <b>B. Identitas Orang Tua</b> 
        </td>
           
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td>{{ $data->nama_ayah }}</td>
        </tr>
        <tr>
            <td>Status Ayah</td>
            <td>:</td>
            <td>{{$data->status_ayah}}</td>
        </tr>
        <tr>
            <td>HP Ayah</td>
            <td>:</td>
            <td>{{$data->hp_ayah}}</td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td>{{ $data->nama_ibu }}</td>
        </tr>
        <tr>
            <td>Status Ibu</td>
            <td>:</td>
            <td>{{$data->status_ibu}}</td>
        </tr>
        <tr>
            <td>HP Ibu</td>
            <td>:</td>
            <td>{{$data->hp_ibu}}</td>
        </tr>
    </table>
    
    <br><br><br><br><br>

      <div style="float:right;margin-right: 80px">
         Indramayu, @php echo date('j M Y'); @endphp
         <br>
         Kepala Sekolah
         <br>
         <img src="https://ppdb.smktelematikaindramayu.sch.id/pbc/ttd.png" alt="" style="widht:130px;height:130px">
         <br>
         <b><u>Tien Yanuar Herawaty, S.Pd.</u></b>
      </div>
      <div style="float:right">
          
      </div>
</div>
</body>
</html>
<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">
          Cek Pendaftar SMK PGRI Telagasari
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-12 table-responsive">
            <table class="table" id="data_pendaftar">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Asal Sekolah</th>
                        <th>Gelombang</th>
                        <th>Status</th>
                        <th>Daftar Ulang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->nama_siswa}}</td>
                            <td>{{$p->asal_sekolah}}</td>
                            <td>{{$p->gelombang}}</td>
                            <td>@if($p->acc == '1') <span class="badge bg-success">Di Acc</span> @else <span class="badge bg-warning">Waiting</span> @endif</td>

                            <td>@if($p->daful == '1') <span class="badge bg-success">Selesai</span> @else <span class="badge bg-warning">Belum Selesai</span>@endif</td>
                            <td>
                               @if($p->acc == '1' && $p->daful == '0')
                               <span class="badge bg-success">Di Acc</span>
                               <span class="badge bg-warning">Belum Daftar Ulang</span>

                               @elseif($p->acc == '1' && $p->daful == '1')
                               <a href="{{route('download', $p->id)}}" class="btn btn-primary"><i class="fas fa-download"></i> Download Data</a>
                                @else 
                                <span class="badge bg-warning">Waiting</span>
                                <span class="badge bg-warning">Waiting</span> 
                               @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
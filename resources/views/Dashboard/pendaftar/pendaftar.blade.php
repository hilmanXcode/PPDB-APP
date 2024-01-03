@extends('layouts.dashboard.app')
@section('content')
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body table-responsive">
                              <h5 class="card-title fw-semibold mb-4">Data Pendaftar</h5>
                                <table class="table table-borderless" id="data_pendaftar">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Asal Sekolah</th>
                                            <th>Rekomendasi</th>
                                            <th>Gelombang</th>
                                            <th>OPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_pendaftar as $dp)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$dp->nama_siswa}}</td>
                                            <td>{{$dp->asal_sekolah}}</td>
                                            <td>{{$dp->rekomendasi ?? '-' }}</td>
                                            <td>{{$dp->gelombang ?? '-' }}</td>

                                            <td>
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Option
                                                </a>
                                              
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <li><a class="dropdown-item" href="{{ route('acc', $dp->id) }}">ACC</a></li>
                                                  <li><a class="dropdown-item" href="{{ route('lihat', $dp->id) }}">Lihat</a></li>
                                                  <li><a class="dropdown-item" href="{{ route('hapus_siswa', $dp->id) }}">Hapus</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data_pendaftar->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title fw-semibold mb-4">ACC Gelombang</h5>
                                <form action="{{route('acc_massal')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <select name="gelombang" class="form-control" id="">
                                            <option disabled selected value>Pilih Gelombang</option>
                                            <option value="Gelombang_1">Gelombang 1</option>
                                            <option value="Gelombang_2">Gelombang 2</option>
                                            <option value="Gelombang_3">Gelombang 3</option>
                                            <option value="Gelombang_4">Gelombang 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary mt-2 btn-block w-100"
                                            value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF CENTER CONTENT -->

            </section>
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                              <h5 class="card-title fw-semibold mb-4">Data Sudah Di ACC</h5>
                              <button class="btn btn-success" onclick="exportData('xlsx', 'data_acc')">Excel</button>
                                <table class="table table-borderless" id="data_acc">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIK Siswa</th>
                                            <th>TTL</th>
                                            <th>Agama</th>
                                            <th>Rekomendasi</th>
                                            <th>Telfon Ayah</th>
                                            <th>Telfon Ibu</th>
                                            <th>Telfon Siswa</th>
                                            <th>Asal Sekolah</th>
                                            <th>Hobi</th>
                                            <th>Cita Cita</th>
                                            <th>Ayah</th>
                                            <th>P. Ayah</th>
                                            <th>Status Ayah</th>
                                            <th>Ibu</th>
                                            <th>P. Ibu</th>
                                            <th>Status Ibu</th>

                                            <th>OPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_acc as $dc)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$dc->nama_siswa}}</td>
                                            <td>{{$dc->nik}}</td>
                                            <td>{{$dc->tempat_lahir}}, {{$dc->tanggal_lahir}}</td>
                                            <td>{{$dc->agama}}</td>
                                            <td>{{$dc->rekomendasi}}</td>
                                            <td>{{$dc->hp_ayah}}</td>
                                            <td>{{$dc->hp_ibu}}</td>
                                            <td>{{$dc->hp_siswa}}</td>
                                            <td>{{$dc->asal_sekolah}}</td>
                                            <td>{{$dc->hobi}}</td>
                                            <td>{{$dc->cita}}</td>
                                            <td>{{$dc->nama_ayah}}</td>
                                            <td>{{$dc->pekerjaan_ayah}}</td>
                                            <td>{{$dc->status_ayah}}</td>
                                            <td>{{$dc->nama_ibu}}</td>
                                            <td>{{$dc->pekerjaan_ibu}}</td>
                                            <td>{{$dc->status_ibu}}</td>
                                            <td>
                                              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Option
                                              </a>
                                            
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="{{ route('lihat', $dc->id) }}">Lihat</a></li>
                                                <li><a class="dropdown-item" href="{{ route('hapus_siswa', $dc->id) }}">Hapus</a></li>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data_acc->links() }}

                            </div>
                        </div>
                    </div>

                    <!-- END OF CENTER CONTENT -->

            </section>
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body table-responsive">
                              <h5 class="card-title fw-semibold mb-4">Data Belum Daftar Ulang</h5>
                              <button class="btn btn-success" onclick="exportData('xlsx', 'belum_daful')">Excel</button>
                                <table class="table table-borderless" id="belum_daful">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Rekomendasi</th>
                                            <th>Daftar Ulang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($belum_daful as $ddf)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$ddf->nama_siswa}}</td>
                                            <td>{{$ddf->rekomendasi}}</td>


                                            <td>
                                                <a href="{{route('daful', $ddf->id)}}"
                                                    class="btn btn-sm btn-block btn-outline-success">✅✅✅</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $belum_daful->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body table-responsive">
                              <h5 class="card-title fw-semibold mb-4">Data Sudah Daftar Ulang</h5>
                              <button class="btn btn-success" onclick="exportData('xlsx', 'sudah_daful')">Excel</button>
                                <table class="table table-borderless" id="sudah_daful">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Rekomendasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sudah_daful as $ddfu)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$ddfu->nama_siswa}}</td>
                                            <td>{{$ddfu->rekomendasi}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $sudah_daful->links() }}
                            </div>


                        </div>
                    </div>
                    
                </div>
        
        </section>

    </div>
</div>
</div>
@endsection
<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <x-dcore.alert />
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Pendaftar</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="data_pendaftar">
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
                                        @php $no = 1; @endphp
                                        @foreach($data_pendaftar as $dp)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$dp->nama_siswa}}</td>
                                            <td>{{$dp->asal_sekolah}}</td>
                                            <td>{{$dp->rekomendasi ?? '-' }}</td>
                                            <td>{{$dp->gelombang ?? '-' }}</td>

                                            <td>
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                                    Option
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('acc', $dp->id)}}">ACC</a>
                                                    <a class="dropdown-item"
                                                        href="{{route('lihat', $dp->id)}}">Lihat</a>
                                                    <a class="dropdown-item"
                                                        href="{{route('hapus_siswa', $dp->id)}}">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>ACC Gelombang</h4>
                            </div>
                            <div class="card-body">
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
                                        <input type="submit" class="btn btn-primary mt-2 btn-block"
                                            value="Acc Gelombang">
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
                            <div class="card-header">
                                <h4>Data Sudah Di ACC</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="data_acc">
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
                                        @php $no = 1; @endphp
                                        @foreach($data_acc as $dc)
                                        <tr>
                                            <td>{{$no++}}</td>
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
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                                    Option
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item"
                                                        href="{{route('lihat', $dc->id)}}">Lihat</a>
                                                    <a class="dropdown-item"
                                                        href="{{route('hapus_siswa', $dc->id)}}">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


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
                            <div class="card-header">
                                <h4>Data Belum Daftar Ulang</h4>
                            </div>
                            <div class="card-body table-responsive">

                                <table class="table" id="belum_daful">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Rekomendasi</th>
                                            <th>Daftar Ulang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($belum_daful as $ddf)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$ddf->nama_siswa}}</td>
                                            <td>{{$ddf->rekomendasi}}</td>


                                            <td>
                                                <a href="{{route('daful', $ddf->id)}}"
                                                    class="btn btn-sm btn-block btn-outline-success"><i
                                                        class="fas fa-check"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Sudah Daftar Ulang</h4>
                            </div>
                            <div class="card-body table-responsive">

                                <table class="table" id="sudah_daful">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Rekomendasi</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($sudah_daful as $ddfu)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$ddfu->nama_siswa}}</td>
                                            <td>{{$ddfu->rekomendasi}}</td>


                                            <td>
                                                <a href="{{route('download', $ddfu->id)}}"
                                                    class="btn btn-sm btn-block btn-outline-success"><i
                                                        class="fas fa-download"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Untuk Dapodik</h4>
                            </div>
                            <div class="card-body table-responsive">

                                <table class="table" id="dapo">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>TTL</th>
                                            <th>NIK</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Asal Sekolha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($sudah_daful as $dpo)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$dpo->nama_siswa}}</td>
                                            <td>{{$dpo->tempat_lahir}}, {{$dpo->tanggal_lahir}}</td>
                                            <td>{{$dpo->nik}}</td>
                                            <td>{{$dpo->nama_ayah}}</td>
                                            <td>{{$dpo->nama_ibu}}</td>
                                            <td>{{$dpo->asal_sekolah}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                    
                </div>
        
        </section>

    </div>
    <x-dcore.footer />
</div>
</div>
<x-dcore.script />

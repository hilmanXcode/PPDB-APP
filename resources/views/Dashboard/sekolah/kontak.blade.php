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
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Kontak Masuk Depan</h4>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <table class="table" id="data_sekolah">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor Hp</th>
                                        <th>Email</th>
                                        <th>Untuk</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->nomor_hp}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->untuk}}</td>
                                            <td>
                                                @if($item->status == 0)
                                                    <span class="badge badge-secondary">Belum Di Baca</span>
                                                @elseif($item->status == 1)
                                                <span class="badge badge-success">Sudah Baca</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('dibaca', $item->id)}}" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('hapus_pesan', $item->id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />
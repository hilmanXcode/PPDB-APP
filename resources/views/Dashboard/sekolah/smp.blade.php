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
                  <h4>Daftar Nama SMP</h4>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#modalSmp"><i class="fas fa-upload"></i> Upload SMP</button>
                            <a class="btn btn-outline-danger btn-block mt-3" href="{{route('reset_smp')}}"><i class="fas fa-stop"></i> Hapus Semua Data SMP</a>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table" id="data_sekolah">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama SMP</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$d->smp}}</td>
                                        <td>
                                            <a href="{{route('hapus_smp', $d->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
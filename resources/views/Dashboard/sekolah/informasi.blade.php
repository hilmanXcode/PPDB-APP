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
                  <h4>Informasi Sekolah</h4>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <form action="{{route('upload_informasi')}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                            <div class="form-group">
                                <label>Judul Informasi</label>
                                <input type="text" name="judul" class="form-control" placeholder="SMKTI BISA!">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Informasi</label>
                                <textarea name="deskripsi_informasi" placeholder="Deskripsi Singkat Tentang Informasi" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Informasi</label>
                                <textarea name="informasi" id="konten2" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Buat Informasi">
                            </div>
                            </form>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table" id="data_sekolah">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Judul Informasi</th>
                                  <th>Option</th>
                                </tr>
                              </thead>
                              <tbody>
                               @php $no = 1; @endphp
                               @foreach($data as $info)
                               <tr>
                                <td>{{$no++}}</td>
                                <td>{{$info->judul}}</td>
                                <td>
                                    <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('hapus_informasi', $info->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
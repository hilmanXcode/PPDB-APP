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
                  <h4>Daftar Slide Depan</h4>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <form action="{{route('post_slide')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label>Wallpaper</label>
                                <input type="file" name="wallpaper" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label>Judul Slider</label>
                                <input type="text" name="judul" class="form-control" placeholder="SMKTI BISA!">
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label>Deskripsi Slider</label>
                                <textarea name="deskripsi_slider" id="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary btn-block" value="Buat Slider">
                            </div>
                            </form>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table" id="data_sekolah">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Judul Slider</th>
                                  <th>Option</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php $no = 1; @endphp
                                @foreach($data as $s)
                                <tr>
                                  <td>{{$no++}}</td>
                                  <td>{{$s->judul}}</td>
                                  <td>
                                    <a href="{{route('hapus_slide', $s->id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
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
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
                  <h4>Tentang Kami</h4>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <form action="{{route('upload_tentang_sekolah')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label>Deskripsi Singkat</label>
                                <textarea name="deskripsi_singkat" class="form-control" placeholder="Deskripsi Singkat Untuk Di Depan" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tentang Sekolah (Lengkap)</label>
                                <textarea name="tentang" id="konten2" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Upload Data">
                            </div>
                        </form>

                        </div>
                        <div class="col-md-12 mt-4">
                           {!! $data->tentang ?? 'Belum Ada Data Apapun' !!}
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
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
                  <h4>Data Pendaftar</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$data->nama_siswa}}</td>
                        </tr>
                        <tr>
                          <td>NIK</td>
                          <td>:</td>
                          <td>{{$data->nik ?? '-'}}</td>
                      </tr>
                        <tr>
                            <td>Gelombang</td>
                            <td>:</td>
                            <td>{{$data->gelombang}}</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>{{$data->asal_sekolah}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{$data->agama}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Jurusan Diambil</td>
                            <td>:</td>
                            <td>{{$data->jurusan}}</td>
                        </tr>
                        <tr>
                          <td>Hobi & Cita Cita</td>
                          <td>:</td>
                          <td>{{$data->hobi ?? '-'}} , {{$data->cita ?? '-'}}</td>
                      </tr>
                    </table>
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
                  <h4>Data Orang Tua</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td>{{$data->nama_ayah ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td>Status Ayah</td>
                            <td>:</td>
                            <td>{{$data->status_ayah ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td>{{$data->nama_ibu ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td>Status Ibu</td>
                            <td>:</td>
                            <td>{{$data->status_ibu ?? '-'}}</td>
                        </tr>
                        
                    </table>
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
                  <h4>Data Kontak</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>HP Ayah</td>
                            <td>:</td>
                            <td>{{$data->hp_ayah ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td>HP Ibu</td>
                            <td>:</td>
                            <td>{{$data->hp_ibu ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td>HP Siswa</td>
                            <td>:</td>
                            <td>{{$data->hp_siswa ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$data->alamat ?? '-'}}</td>
                        </tr>
                        
                    </table>
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
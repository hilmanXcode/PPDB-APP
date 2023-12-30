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
                  <h4>Kontak Masuk Dari {{$baca->nama}}</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nomor Telpon </td>
                            <td>:</td>
                            <td>{{$baca->nomor_hp}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$baca->email}}</td>
                        </tr>
                        <tr>
                            <td>Untuk</td>
                            <td>:</td>
                            <td>{{$baca->untuk}}</td>
                        </tr>
                        <tr>
                            <td>Pesan</td>
                            <td>:</td>
                            <td>{{$baca->pesan}}</td>
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
<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <x-dcore.alert />
      <div class="main-content">
        <section class="section">
        <x-dcore.card :g1="$g1" :g2="$g2" :g3="$g3" :g4="$g4" :bdf="$bdf" :sdf="$sdf"/>

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
               
                <div class="card-body d-flex justify-content-center">
                <h3>Selamat Datang Di Aplikasi PPDB SMKTI Rev.3.0.0 - 2022</h3>
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
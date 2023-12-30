<div class="container-fluid appointment my-5 py-5 wow fadeIn"
data-wow-delay="0.1s" >
<div class="container py-5">
  <div class="row g-5">
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
      <h1 class="display-6 text-white mb-5">
        Ayo Bergabung Bersama SMK Telematika Indramayu !
      </h1>
      <p class="text-white mb-5">
        Ayo bergabung bersama kami di SMK Telematika Indramayu, dan menjadi bagian dari SMK Telematika Indramayu, belajar dengan para guru-guru hebat, belajar dengan para guru-guru yang sudah tersertifikasi dan, belajar dengan guru-guru yang sangat asik, Yuk bergabung bersama kami !
      </p>
      <div class="bg-white rounded p-3">
        <div class="d-flex align-items-center bg-primary rounded p-3">
         
          <h5 class="text-white mb-0 mt-2 mb-2">Nurokhim : +62 819-4734-4359</h5>
        </div>
      </div>
      <div class="bg-white rounded p-3 mt-3">
        <div class="d-flex align-items-center bg-primary rounded p-3">
         
          <h5 class="text-white mb-0 mt-2 mb-2">Agus : +62 895-6191-33321</h5>
        </div>
      </div>
      <div class="bg-white rounded p-3 mt-3">
        <div class="d-flex align-items-center bg-primary rounded p-3">
         
          <h5 class="text-white mb-0 mt-2 mb-2">Ari : +62 851-5536-1211</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
      <div class="bg-white rounded p-5">
        <div class="d-flex justify-content-center"><H2>Hubungi Kami</H2></div>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
        @endif
        <form method="POST" action="{{route('hub')}}">
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="form-floating">
                <input
                  type="text"
                  name="nama"
                  class="form-control"
                  id="gname"
                  placeholder="Gurdian Name"
                />
                <label for="gname">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating">
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="gmail"
                  placeholder="xxx@xxx.com"
                />
                <label for="gmail">Email Valid</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating">
                <input
                  type="number"
                  name="nomor_hp"
                  class="form-control"
                  id="cname"
                  placeholder="08xxxxxxxxx"
                />
                <label for="cname">Nomor HP/WA</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating">
              
                <select name="untuk" class="form-control">
                  <option disabled selected value>Pesan Untuk</option>
                  <option value="Customer Services">Customer Services</option>
                  <option value="Technical Support">Technical Support</option>
                </select>
                <label for="cage">Pesan Untuk</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea
                name="pesan"
                  class="form-control"
                  placeholder="Pesan kamu"
                  id="message"
                  style="height: 328px"
                ></textarea>
                <label for="message">Pesan</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary py-3 px-5" type="submit">
                Kirim Pesan
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
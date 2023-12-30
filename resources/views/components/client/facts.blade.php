<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container facts px-lg-0">
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
          <div class="h-100 px-4 ps-lg-0">
            <h1 class="text-white mb-4">Siapa SMK Telematika Indramayu ?</h1>
            <p class="text-light mb-5 text-justify">
              {{$tentang->deskripsi_singkat ?? 'Belum Ada Apapun'}}
            </p>
            <a href="{{route('siapa_kami')}}" class="align-self-start btn btn-secondary py-3 px-5"
              >Selengkapnya</a
            >
          </div>
        </div>
        <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
          <div class="h-100 px-4 pe-lg-0">
            <div class="row g-5">
              <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">{{$jp}}</h1>
                <p class="fs-5 text-primary">Pendaftar</p>
              </div>
              <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">{{$jt}}</h1>
                <p class="fs-5 text-primary">Terdaftar</p>
              </div>
              <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">{{$jj}}</h1>
                <p class="fs-5 text-primary">Jurusan</p>
              </div>
              <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">3</h1>
                <p class="fs-5 text-primary">Costumer Service</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
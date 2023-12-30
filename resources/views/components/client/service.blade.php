<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">
          Informasi SMK Telematika Indramayu
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
       @forelse($info as $infor)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
              <div
                class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
              >
                <img
                  class="img-fluid"
                  src="img/icon/icon-04-light.png"
                  alt=""
                />
              </div>
              <h4 class="mb-0">{{$infor->judul}}</h4>
            </div>
            <p class="mb-4">
             {{Str::limit($infor->deskripsi_informasi, 100, '.....')}}
            </p>
            <a class="btn btn-light px-3" href="{{route('baca', $infor->id)}}">Read More</a>
          </div>
        </div>
        @empty
        <div class="d-flex justify-content-center">Tidak Ada Informasi Apapun</div>
       @endforelse
      </div>
    </div>
  </div>
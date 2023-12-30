<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @forelse($slide as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
          <img class="w-100" src="{{asset('slide/'.$slider->wallpaper)}}" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="display-3 text-dark mb-4 animated slideInDown" style="text-shadow: 0 0 4px #ffffff, 0 0 5px #ffffff;">
                    {{$slider->judul ?? ''}}
                  </h1>
                  <p class="fs-5 text-dark mb-5" style="text-shadow: 0 0 2px #ffffff">
                    {{$slider->deskripsi_slider ?? ''}}
                  </p>

                  @if($slider->judul !== null || $slider->deskripsi_slider !== null)
                  <a href="{{route('daftar')}}" class="btn btn-primary py-3 px-5"
                  >Daftar Disini <i class="fas fa-arrow-right"></i></a
                >
                <a href="{{route('cek')}}" class="btn btn-dark py-3 px-5"
                  >Cek Data Disini <i class="fas fa-arrow-right"></i></a
                >
                @else
                  
                @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="carousel-item active">
          <img class="w-100" src="{{asset('default/guru.jpg')}}" alt="Image" style="filter: blur(4px);" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="display-3 text-dark mb-4 animated slideInDown" style="text-shadow: 0 0 4px #ffffff, 0 0 5px #ffffff;">
                    {{"SMK Telematika Indramayu"}}
                  </h1>
                  <p class="fs-5 text-light mb-5" style="text-shadow: 0 0 2px red, 0 0 2px blue;">
                    {{"Pilihan Cerdas Generasi Emas !"}}
                  </p>
                  <a href="{{route('daftar')}}" class="btn btn-primary py-3 px-5"
                    >Daftar Disini <i class="fas fa-arrow-right"></i></a
                  >
                  <a href="{{route('cek')}}" class="btn btn-dark py-3 px-5"
                    >Cek Data Disini <i class="fas fa-arrow-right"></i></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
       @endforelse
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
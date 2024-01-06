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
                                <h1 class="display-3 text-dark mb-4 animated slideInDown"
                                    style="text-shadow: 0 0 4px #ffffff, 0 0 5px #ffffff;">
                                    {{$slider->judul ?? ''}}
                                </h1>
                                <p class="fs-5 text-dark mb-5" style="text-shadow: 0 0 2px #ffffff">
                                    {{$slider->deskripsi_slider ?? ''}}
                                </p>

                                @if($slider->judul !== null || $slider->deskripsi_slider !== null)
                                <a href="{{route('daftar')}}" class="btn btn-primary py-3 px-5">Daftar Disini <i
                                        class="fas fa-arrow-right"></i></a>
                                <a href="{{route('cek')}}" class="btn btn-dark py-3 px-5">Cek Data Disini <i
                                        class="fas fa-arrow-right"></i></a>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('img/sekolah.webp')}}" width="1378px" height="768px" alt=""
                    style="filter: blur(4px);" />
                <div class="carousel-caption position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-12 col-lg-6">
                                <h5 class=" text-uppercase mb-3 animated slideInDown" style="color: #fb873f;">
                                    MULAI DARI HARI INI!</h5>
                                <h1 class="display-3 text-white animated slideInDown">SMK PGRI Telagasari</h1>
                                <p class="fs-5 text-white mb-5">
                                    {{"sekolah kejuruan yang berlokasi di Kabupaten Karawang, Jawa Barat, kini menerima peserta didik baru untuk tahun ajaran 2024/2025.!"}}
                                </p>
                                <a href="{{route('daftar')}}" target="_blank"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Daftar
                                    Sekarang</a>
                                <a href="{{route('cek')}}" target="_blank"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Cek Pendaftaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">
         Galeri Foto SMK Telematika Indramayu
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
          @foreach($foto as $f)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('galeri/'.$f->foto)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$f->judul}}</h5>
                </div>
              </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">
         Galeri Video Youtube SMK PGRI Telagasari
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
          @foreach($video as $v)
        <div class="col-md-4">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/{{$v->id_youtube}}" frameborder="0" allowfullscreen></iframe>
                <div class="card-body">
                  <h5 class="card-title">{{$v->judul}}</h5>
                  <p>Channel : {{$v->channel}}</p>
                </div>
              </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
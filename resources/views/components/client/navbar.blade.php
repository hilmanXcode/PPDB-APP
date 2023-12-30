<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
      <h1 class="m-0">
        <img
          class="img-fluid me-3"
          src="{{asset('img/icon/index.png')}}"
          alt=""
        />SMKTI
      </h1>
    </a>
    <button
      type="button"
      class="navbar-toggler"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
        <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
        <a href="{{route('siapa_kami')}}" class="nav-item nav-link">About Us</a>
        <a href="{{route('informasi')}}" class="nav-item nav-link">Information</a>

        <a href="{{route('daftar')}}" class="nav-item nav-link text-primary">Register !</a>
        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            >Gallery</a
          >
          <div class="dropdown-menu bg-light border-0 m-0">
            <a href="{{route('foto')}}" class="dropdown-item">Photo</a>
            <a href="{{route('video')}}" class="dropdown-item">Video</a>
            
          </div>
          
        </div>
        <a href="{{route('help')}}" class="nav-item nav-link">Help</a>
      </div>
    </div>
    <a href="{{route('daftar')}}" class="btn btn-primary px-3 d-none d-lg-block">Register Here !</a>
  </nav>
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('home')}}">PPDB SMK PGRI Telagasari</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('home')}}">PSGT</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="{{url('home')}}">Dashboard</a></li>
              </ul>
            </li>
         
            <li class="menu-header">Main Menu</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Modul Pendaftaran</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link beep beep-sidebar" href="{{route('daftar_admin')}}">Daftar Baru</a></li>                
                <li><a class="nav-link beep beep-sidebar" href="{{route('pendaftar')}}">Pendaftar</a></li>                               
            </ul>
            </li>
            
           
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modul Sekolah</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalJurusan">Jurusan</a></li>
                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalGelombang">Gelombang</a></li>
                <li><a class="nav-link" href="{{route('informasi_slide')}}">Informasi Slide</a></li>
                <li><a class="nav-link" href="{{route('informasi_sekolah')}}">Informasi Sekolah</a></li>
                <li><a class="nav-link" href="{{route('tentang_sekolah')}}">Tentang Sekolah</a></li>
                <li><a class="nav-link" href="{{route('kontak_admin')}}">Kontak Depan</a></li>

                <li><a class="nav-link" href="{{route('galeri')}}">Galeri Sekolah</a></li>
              </ul>
            </li>

          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        
        </aside>
      </div>
<x-dcore.modal />
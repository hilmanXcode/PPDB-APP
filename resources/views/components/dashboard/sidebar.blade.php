<!-- Sidebar Start -->
<aside class="left-sidebar">
<!-- Sidebar scroll-->
<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
    <a href="#" class="text-nowrap logo-img">
        <img class="mt-3" src="{{ asset('images/logos/smk-pgri.jpg') }}" width="150" alt="" />
    </a>
    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
    </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link {{ $page === "dashboard" ? 'active' : '' }}" href="{{ route('home') }}" aria-expanded="false">
            <span>
            <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
        </a>
        </li>
        <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Modul Pendaftaran</span>
        </li>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link {{ $page === "daftar_admin" ? 'active' : '' }}" href="{{ route('daftar_admin') }}" aria-expanded="false">
            <span>
                <i class="bi bi-person-add fs-6"></i>
            </span>
            <span class="hide-menu">Daftar Baru</span>
        </a>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link {{ $page === "pendaftar" ? 'active' : '' }}" href="{{ route('pendaftar') }}" aria-expanded="false">
            <span>
                <i class="bi bi-people-fill fs-6"></i>   
            </span>
            <span class="hide-menu">Pendaftar</span>
        </a>
        </li>
        
        <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">SETTINGS</span>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link {{ $page === "jurusan" ? "active" : '' }}" href="{{ route('jurusan') }}" aria-expanded="false">
            <span>
                <i class="bi bi-mortarboard fs-6"></i>
            </span>
            <span class="hide-menu">Jurusan</span>
        </a>
        </li>
        <li class="sidebar-item">

        <a class="sidebar-link {{ $page === "gelombang" ? "active" : '' }}"" href="{{ route('gelombang') }}"  aria-expanded="false">

            <span>
            <i class="bi bi-arrow-clockwise fs-6"></i>
            </span>
            <span class="hide-menu">Gelombang</span>
        </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $page === "informasi_sekolah" ? 'active' : '' }}" href="{{ route ('informasi_sekolah') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-info-circle fs-6"></i>
                </span>
                <span class="hide-menu">Blog</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $page === "category_manager" ? 'active' : '' }}" href="{{ route ('category_manager') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-info-circle fs-6"></i>
                </span>
                <span class="hide-menu">Category</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $page === "kontak_admin" ? 'active' : '' }}" href="{{ route('kontak_admin') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-envelope fs-6"></i>
                </span>
                <span class="hide-menu">Kotak Masuk</span>
            </a>
        </li>
        <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
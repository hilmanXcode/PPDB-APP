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
                <i class="ti ti-user fs-6"></i>
            </span>
            <span class="hide-menu">Daftar Baru</span>
        </a>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link {{ $page === "pendaftar" ? 'active' : '' }}" href="{{ route('pendaftar') }}" aria-expanded="false">
            <span>
                <i class="ti ti-user fs-6"></i>
            </span>
            <span class="hide-menu">Pendaftar</span>
        </a>
        </li>
        
        <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">SETTINGS</span>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
            <span>
                <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Jurusan</span>
        </a>
        </li>
        <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
            <span>
                <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Gelombang</span>
        </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $page === "" ? 'active' : '' }}" href="{{ route ('informasi_sekolah') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Informasi Sekolah</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Tentang Sekolah</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Kontak Depan</span>
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
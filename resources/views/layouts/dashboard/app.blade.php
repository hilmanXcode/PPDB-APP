@include('components.dashboard.header')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('components.dashboard.sidebar')
        <div class="body-wrapper">
            @include('components.dashboard.headbar')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
@include('components.dashboard.footer')

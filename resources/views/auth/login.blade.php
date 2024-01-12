@extends('layouts.Dashboard')
@section('content')
<link href="{{ asset('css/styles.min.css') }}" rel="stylesheet" />
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
  <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100 mx-auto rounded-lg">
        <div class="col-md-7 col-lg-6 col-xxl-3">
          <div class="card mb-0 mx-auto rounded-lg">
             <div class="card-body">
             <a
                    href="#"
                    class="text-nowrap logo-img text-center d-block py-5 w-100"
                  >
                    <img
                      src="{{ asset('img/logo.png') }}"
                      width="180"
                      alt=""
                    />
                  </a>
             
             <form method="POST" action="{{ route('login') }}" >
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
          </div>

             <div class="form-group my-2">
                  <div class="custom-control custom-checkbox">

                    <input class="custom-control-input" type="checkbox" name="remember" id="remember-me"
                    {{ old('remember') ? 'checked' : '' }}>

                    <label class="custom-control-label" for="remember-me">Remember Me</label>
            </div>
        </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block w-100" tabindex="4">
                    Login
                </button>
            </div>
         </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<x-dashboard.footer />

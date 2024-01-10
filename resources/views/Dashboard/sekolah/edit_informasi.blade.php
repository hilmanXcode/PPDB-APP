@extends('layouts.dashboard.app')
@section('content')
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <div class="main-content">
        <section class="section">

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body table-responsive">
                  <h5 class="card-title fw-semibold mb-3">Blog</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('update_informasi', $data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                            <div class="form-group">
                                <label class="{{ $errors->get('judul') ? 'text-danger' : '' }}">Judul Informasi<sup class="text-danger">*</sup></label>
                                <input type="text" name="judul" class="form-control {{ $errors->get('judul') ? 'is-invalid' : '' }}" placeholder="SMK PGRI BISA!" value="{{ $data->judul }}">
                                @if ($errors->get('judul'))
                                    <div class="invalid-feedback text-danger">
                                    @foreach ($errors->get('judul') as $message)
                                        {{ $message }}
                                    @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mt-2">
                                <label class="{{ $errors->get('deskripsi_informasi') ? 'text-danger' : '' }}">Deskripsi Informasi<sup class="text-danger">*</sup></label>
                                <textarea name="deskripsi_informasi" placeholder="Deskripsi Singkat Tentang Informasi" class="form-control {{ $errors->get('deskripsi_informasi') ? 'is-invalid' : '' }}" cols="30" rows="10">{{ $data->deskripsi_informasi }}</textarea>
                                @if ($errors->get('deskripsi_informasi'))
                                    <div class="invalid-feedback text-danger">
                                    @foreach ($errors->get('deskripsi_informasi') as $message)
                                        {{ $message }}
                                    @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mt-2">
                                <label class="{{ $errors->get('informasi') ? 'text-danger' : '' }}">Informasi<sup class="text-danger">*</sup></label>
                                <textarea name="informasi" id="konten2" class="form-control {{ $errors->get('informasi') ? 'is-invalid' : '' }}" cols="30" rows="10">{{ $data->informasi }}</textarea>
                                @if ($errors->get('informasi'))
                                    <div class="invalid-feedback text-danger">
                                    @foreach ($errors->get('informasi') as $message)
                                        {{ $message }}
                                    @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mt-2">
                                <label for="formFile" class="form-label {{ $errors->get('banner_image') ? 'text-danger' : '' }}">Banner Image</label>
                                <input class="form-control {{ $errors->get('banner_image') ? 'is-invalid' : '' }}" type="file" name="banner_image" id="image" placeholder="image"/>
                                @if ($errors->get('banner_image'))
                                    <div class="invalid-feedback text-danger">
                                    @foreach ($errors->get('banner_image') as $message)
                                        {{ $message }}
                                    @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mt-2">
                              <label for="category" class="form-label {{ $errors->get('category') ? 'text-danger' : '' }}">Kategori</label>
                              <select name="category" class="form-control" id="">
                                  @foreach ($category as $cat)
                                    @if ($data->category_id === $cat->id)
                                      <option value="{{ $cat->id }}" selected>{{ $cat->category_name }}</option>
                                    @else
                                      <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endif
                                  @endforeach
                              </select>
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-primary btn-block w-100" value="Edit Informasi">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />
@endsection
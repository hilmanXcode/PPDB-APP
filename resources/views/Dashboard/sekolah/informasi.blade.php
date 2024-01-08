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
                  <h5 class="card-title fw-semibold mb-3">Informasi Sekolah</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('upload_informasi')}}" method="post" enctype="multipart/form-data">
                                @csrf
                           
                            <div class="form-group">
                                <label class="{{ $errors->get('judul') ? 'text-danger' : '' }}">Judul Informasi<sup class="text-danger">*</sup></label>
                                <input type="text" name="judul" class="form-control {{ $errors->get('judul') ? 'is-invalid' : '' }}" placeholder="SMK PGRI BISA!">
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
                                <textarea name="deskripsi_informasi" placeholder="Deskripsi Singkat Tentang Informasi" class="form-control {{ $errors->get('deskripsi_informasi') ? 'is-invalid' : '' }}" cols="30" rows="10"></textarea>
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
                                <textarea name="informasi" id="konten2" class="form-control {{ $errors->get('informasi') ? 'is-invalid' : '' }}" cols="30" rows="10"></textarea>
                                @if ($errors->get('informasi'))
                                  <div class="invalid-feedback text-danger">
                                    @foreach ($errors->get('informasi') as $message)
                                      {{ $message }}
                                    @endforeach
                                  </div>
                                @endif
                            </div>
                            <div class="form-group mt-2">
                              <label for="formFile" class="form-label {{ $errors->get('banner_image') ? 'text-danger' : '' }}">Banner Image<sup class="text-danger">*</sup></label>
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
                                <input type="submit" class="btn btn-primary btn-block w-100" value="Buat Informasi">
                            </div>
                            </form>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table table-borderless" id="data_sekolah">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Judul Informasi</th>
                                  <th>Banner Image</th>
                                  <th>Created At</th>
                                  <th>Option</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($data as $info)
                               <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->judul}}</td>
                                <td>
                                  <img src="{{ asset($info->banner_image) }}" width="300" height="200"/>
                                </td>
                                <td>
                                  @php 
                                    $month = [
                                      'Januari',
                                      'Februari',
                                      'Maret',
                                      'April',
                                      'Mei',
                                      'Juni',
                                      'Juli',
                                      'Agustus',
                                      'September',
                                      'Oktober',
                                      'November',
                                      'Desember'
                                    ];

                                    $date = $info->created_at->format("j") . " " . $month[$info->created_at->format("n") - 1] . " " . $info->created_at->format("Y");

                                  @endphp
                                  {{ $date }}
                                </td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('edit_informasi', $info->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('hapus_informasi', $info->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button href="{{ route('hapus_informasi', $info->id) }}" class="btn btn-danger" id="hapus_informasi"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                                
                               </tr>
                               @endforeach
                              </tbody>
                            </table>
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
@extends('layouts.dashboard.app')
@section('content')
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="main-content">
        <section class="section">

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body table-responsive">
                  <h5 class="fw-semibold mb-4">Tentang Kami</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('upload_tentang_sekolah')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label class="mb-2">Deskripsi Singkat</label>
                                <input name="deskripsi_singkat" class="form-control" placeholder="Deskripsi Singkat Untuk Di Depan" value="{{ $data->deskripsi_singkat }}">
                            </div>
                            <div class="form-group mt-2">
                                <label class="mb-2">Tentang Sekolah (Lengkap)</label>
                                <textarea name="tentang" id="konten2" class="form-control" cols="30" rows="10">{{ $data->tentang }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block w-100 mt-2" value="Update Data">
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
    </div>
  </div>
  <x-dcore.script />
@endsection
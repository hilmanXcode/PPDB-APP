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
                  <h5 class="fw-semibold">Kontak Masuk Depan</h5>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <table class="table table-borderless" id="data_sekolah">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor Hp</th>
                                        <th>Email</th>
                                        <th>Untuk</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->nomor_hp}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->untuk}}</td>
                                            <td>
                                                @if($item->status == 0)
                                                    <span class="badge bg-secondary">Belum Di Baca</span>
                                                @elseif($item->status == 1)
                                                <span class="badge bg-success">Sudah Di Baca</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('dibaca', $item->id)}}" class="btn btn-outline-primary">🧐🧐</a>
                                                <a href="{{route('hapus_pesan', $item->id)}}" class="btn btn-outline-danger">❌❌</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
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
@endsection
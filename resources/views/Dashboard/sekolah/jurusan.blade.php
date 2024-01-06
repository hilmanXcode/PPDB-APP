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
                  <div class="d-flex justify-content-between">
                  <h5 class="card-title fw-semibold">Data Jurusan</h5>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalJurusan">
                    <i class="bi bi-plus-circle"></i> Tambah Jurusan
                  </button>
                  </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <table class="table table-borderless" id="data_sekolah">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Jurusan </th>
                                  <th>Option</th>
                                </tr>
                              </thead>
                              <tbody>
                               @php $no = 1; @endphp
                               @foreach($data as $info)
                               <tr>
                                <td>{{$no++}}</td>
                                <td>{{$info->jurusan}}</td>
                                <td>
                                    <a href="#" class="btn btn-danger" id="hapus" data-bs-id="{{ $info->id }}"><i class="bi bi-trash-fill"></i></a>
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

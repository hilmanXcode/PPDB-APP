@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid">
        {{-- Row 1 --}}
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body d-flex gap-4">
                        <div class="px-4 py-4 bg-primary rounded text-white">
                            <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="mt-1">
                            <h5 class="card-title">Gelombang 1</h5>
                            <p class="card-text">{{ $g1 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body d-flex gap-4">
                        <div class="px-4 py-4 bg-primary rounded text-white">
                            <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="mt-1">
                            <h5 class="card-title">Gelombang 2</h5>
                            <p class="card-text">{{ $g2 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body d-flex gap-4">
                        <div class="px-4 py-4 bg-primary rounded text-white">
                            <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="mt-1">
                            <h5 class="card-title">Gelombang 3</h5>
                            <p class="card-text">{{ $g3 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body d-flex gap-4">
                        <div class="px-4 py-4 bg-primary rounded text-white">
                            <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="mt-1">
                            <h5 class="card-title">Gelombang 4</h5>
                            <p class="card-text">{{ $g4 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Row 2 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Statistik Pendaftaran</h5>
                            </div>

                        </div>
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">

                    <div class="col-lg-12">
                        <!-- Total Pendaftar -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold"> Total Pendaftar </h5>
                                        <h4 class="fw-semibold mb-3">1234</h4>
                                        <div class="d-flex align-items-center pb-1">
                                            <span
                                                class="me-2 rounded-circle bg-light-primary round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-gender-male text-primary" title="Laki-laki"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">12</p>
                                            <p class="fs-3 mb-0">laki-laki</p>

                                        </div>
                                        <div class="d-flex align-items-center pb-1">
                                            <span
                                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-gender-female text-danger" title="Laki-laki"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">12</p>
                                            <p class="fs-3 mb-0">Perempuan</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-users fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <!-- Belum ACC -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold"> Sudah ACC </h5>
                                        <h4 class="fw-semibold mb-3">1234</h4>
                                        <div class="d-flex align-items-center pb-1">
                                            <span
                                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-ban text-danger"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">143</p>
                                            <p class="fs-3 mb-0">belum acc</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-circle-check fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <!-- Sudah ACC -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold"> Sudah Daftar Ulang </h5>
                                        <h4 class="fw-semibold mb-3">$6,820</h4>
                                        <div class="d-flex align-items-center pb-1">
                                            <span
                                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-archive-off text-danger"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">123</p>
                                            <p class="fs-3 mb-0">Belum daftar ulang</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-archive fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Row 3 --}}
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Recent Registered</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless" id="data_pendaftar">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Asal Sekolah</th>
                                        <th>Rekomendasi</th>
                                        <th>Gelombang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_pendaftar as $dp)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$dp->nama_siswa}}</td>
                                        <td>{{$dp->asal_sekolah}}</td>
                                        <td>{{$dp->jenis_kelamin}}</td>
                                        <td>{{$dp->created_at}}</td>

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
@endsection


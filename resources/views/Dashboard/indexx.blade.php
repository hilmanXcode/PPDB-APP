@extends('layouts.dashboard.app')

@section('content')
    <h1 class="text-xl my-5 text-center">SI-PPDB SMK PGRI TELAGASARI</h1>
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
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex gap-4">
                    <div class="px-4 py-4 bg-primary rounded text-white">
                        <i class="ti ti-user fs-6"></i>
                    </div>
                    <div class="mt-1">
                        <h5 class="card-title">Belum Daftar Ulang</h5>
                        <p class="card-text">{{ $bdf }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex gap-4">
                    <div class="px-4 py-4 bg-primary rounded text-white">
                        <i class="ti ti-user fs-6"></i>
                    </div>
                    <div class="mt-1">
                        <h5 class="card-title">Sudah Daftar Ulang</h5>
                        <p class="card-text">{{ $sdf }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
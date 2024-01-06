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
                                <div class="card-header d-flex justify-content-between">
                                    <h4>Gelombang</h4>
                                    
                                </div>
                                <div class="card-body table-responsive">
                                    <div class="row">
                                        <div class="col-md-12 mt-4">
                                            <table class="table" id="data_sekolah">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Gelombang</th>
                                                        <th>Status</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($data as $info)
                                                        <?php
                                                        $setting = [];
                                                        if ($info->status_gelombang === 'Buka') {
                                                            $setting = [
                                                                'status-color' => 'badge bg-primary',
                                                                'status-value' => 'Buka',
                                                                'route' => route('edit_gelombang', ['id' => $info->id, 'param' => 'Tutup']),

                                                                'param' => 'Buka',
                                                                'text-link' => 'Tutup',
                                                                'btn-link' => 'btn btn-danger',
                                                            ];
                                                        } else {
                                                            $setting = [
                                                                'status-color' => 'badge bg-danger',
                                                                'status-value' => 'Tutup',
                                                                'route' => route('edit_gelombang', ['id' => $info->id, 'param' => 'Buka']),

                                                                'param' => 'Tutup',
                                                                'text-link' => 'Buka',
                                                                'btn-link' => 'btn btn-primary',
                                                            ];
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $info->gelombang }}</td>
                                                            <td>
                                                                <span class="{{ $setting['status-color'] }}">{{ $setting['status-value'] }}</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ $setting['route'] }}" class="{{ $setting['btn-link'] }}">{{ $setting['text-link']}}</a>
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

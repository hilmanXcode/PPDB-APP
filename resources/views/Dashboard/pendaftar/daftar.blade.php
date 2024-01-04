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
                <div class="card-header">
                  <h4>Form Pendaftaran</h4>
                </div>
                <div class="card-body">
                  <x-dcore.daftar :jurusan="$jurusan" :gelombang="$gelombang" :form="$form" :button="$button"/>
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
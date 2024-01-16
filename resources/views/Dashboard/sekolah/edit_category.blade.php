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
                  <h5 class="card-title fw-semibold mb-3">Edit Category</h5>
                    <div class="row">
                        <div class="col-md-12">
                           <form action="{{ route("category_edit", $data->id) }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="kategori" class="{{ $errors->get('category_name') ? 'text-danger' : '' }}">Nama Kategori</label>
                                    <input type="text" class="form-control {{ $errors->get('category_name') ? 'is-invalid' : '' }}" name="category_name" id="kategori" placeholder="Ex. Web Programming" value="{{ $data->category_name }}">
                                    @if ($errors->get('category_name'))
                                        <div class="invalid-feedback text-danger">
                                        @foreach ($errors->get('category_name') as $message)
                                            {{ $message }}
                                        @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group my-2">
                                    <label for="slug_kategori" class="{{ $errors->get('category_slug') ? 'text-danger' : '' }}">Slug Kategori</label>
                                    <input type="text" class="form-control {{ $errors->get('category_slug') ? 'is-invalid' : '' }}" name="category_slug" id="slug_kategori" placeholder="Ex. web_programming" value="{{ $data->category_slug }}">
                                    @if ($errors->get('category_slug'))
                                        <div class="invalid-feedback text-danger">
                                        @foreach ($errors->get('category_slug') as $message)
                                            {{ $message }}
                                        @endforeach
                                        </div>
                                    @endif
                                </div>
                                <button class="btn btn-primary w-100">Submit</button>
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
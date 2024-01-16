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
                  <h5 class="card-title fw-semibold mb-3">Category Manager</h5>
                    <div class="row">
                        <div class="col-md-12">
                           <form action="{{ route("upload_kategori") }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="kategori" class="{{ $errors->get('category_name') ? 'text-danger' : '' }}">Nama Kategori</label>
                                    <input type="text" class="form-control {{ $errors->get('category_name') ? 'is-invalid' : '' }}" name="category_name" id="kategori" placeholder="Ex. Web Programming">
                                    @if ($errors->get('category_name'))
                                        <div class="invalid-feedback text-danger">
                                        @foreach ($errors->get('category_name') as $message)
                                            {{ $message }}
                                        @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group my-2">
                                    <label for="kategori" class="{{ $errors->get('category_slug') ? 'text-danger' : '' }}">Slug Kategori</label>
                                    <input type="text" class="form-control {{ $errors->get('category_slug') ? 'is-invalid' : '' }}" name="category_slug" id="slug_kategori" placeholder="Ex. web_programming">
                                    @if ($errors->get('category_slug'))
                                        <div class="invalid-feedback text-danger">
                                        @foreach ($errors->get('category_slug') as $message)
                                            {{ $message }}
                                        @endforeach
                                        </div>
                                    @endif
                                </div>
                                
                                <button class="btn btn-primary w-100 mt-2">Submit</button>
                           </form>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table table-borderless" id="data_kategori">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Kategori</th>
                                  <th>Option</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $category)
                                    
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('category_edit', $category->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('category_delete', $category->id) }}" method="POST">
                                            @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger" id="hapus_kategori{{ $category->id }}"><i class="bi bi-trash"></i></button>
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
    </div>
  </div>
@endsection
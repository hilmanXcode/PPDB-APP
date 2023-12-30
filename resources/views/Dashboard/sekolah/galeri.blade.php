<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <x-dcore.alert />
      <div class="main-content">
        <section class="section">

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Galeri SMK TI</h4>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-12">
                           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalFoto">
    Foto
  </button>
  <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modalYoutube">
    Video Youtube
  </button>
                        </div>
                        <div class="col-md-6 mt-4 table-responsive">
                           <table class="table" id="data_foto">
                               <thead>
                                   <tr>
                                       <th>No</th>
                                       <th>Judul Kegiatan</th>
                                       <th>Option</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @php $no = 1; @endphp
                                   @foreach($foto as $f)
                                   <tr>
                                       <td>{{$no++}}</td>
                                       <td>{{$f->judul}}</td>
                                       <td>
                                           <a href="{{route('hapus_foto', $f->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                       </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                        </div>
                        <div class="col-md-6 mt-4 table-responsive">
                            <table class="table" id="data_video">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Video</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no1 = 1; @endphp
                                    @foreach($video as $v)
                                    <tr>
                                        <td>{{$no1++}}</td>
                                        <td>{{$v->judul}}</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>

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
      <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('upload_foto')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
              <div class="form-group">
                  <label>Judul Foto</label>
                  <input type="text" name="judul" class="form-control" placeholder="Judul Foto Kegiatan">
              </div>
              <div class="form-group">
                  <label>Foto Kegiatan</label>
                  <input type="file" name="foto" class="form-control-file">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>




      <div class="modal fade" id="modalYoutube" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Upload Video Youtube</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('upload_video')}}" method="POST">
                @csrf
            <div class="modal-body">
              <div class="form-group">
                  <label>ID Video</label>
                  <input type="text" name="link" class="form-control" placeholder="ID Youtube">
                  <p>https://www.youtube.com/watch?v=<font class="text-danger">0zS0fzGfqWw</font></p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>




    </div>
  </div>
<x-dcore.script />
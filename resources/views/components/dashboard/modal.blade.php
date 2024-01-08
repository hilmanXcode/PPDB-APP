<!-- Modal -->
<div class="modal fade" id="modalJurusan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="{{route('add_jurusan')}}" method="POST">
        @csrf
      <div class="modal-body">
      <h5 class="modal-title mb-3" id="exampleModalLabel">Jurusan</h5>
        <div class="form-group">
            <input type="text" name="jurusan" placeholder="Masukan Jurusan" class="form-control">
        </div>
        <div class="form-group mt-2">
          <label>Deskripsi Jurusan</label>
          <textarea name="deskripsi_jurusan" class="form-control" id="konten" cols="30" rows="10"></textarea>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

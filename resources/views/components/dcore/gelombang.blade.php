
<!-- Modal -->
<div class="modal fade" id="modalGelombang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gelombang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('add_gelombang')}}" method="POST">
        @csrf
      
      <div class="modal-body">
        <div class="form-group">
            <label>Gelombang</label>
            <select name="gelombang" class="form-control">
                <option disabled selected value>Pilih Gelombang</option>
                <option value="Gelombang_1">Gelombang 1</option>
                <option value="Gelombang_2">Gelombang 2</option>
                <option value="Gelombang_3">Gelombang 3</option>
                <option value="Gelombang_4">Gelombang 4</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status Gelombang</label>
            <select name="status_gelombang" class="form-control">
                <option disabled selected value>Pilih Status</option>
                <option value="Buka">Buka</option>
                <option value="Tutup">Tutup</option>

            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Gelombang</button>
      </div>
      </form>
    </div>
  </div>
</div>
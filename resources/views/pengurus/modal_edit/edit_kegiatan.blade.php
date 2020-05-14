<div class="modal fade" id="ijin_kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Ijin Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{route('pengurus-put-perijinan')}}" id="edit_kegiatan" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <input type="hidden" name="perijinan_id" id="perijinan_id">
        <input type="hidden" name="type" value="ijin_kegiatan">
		  <div class="form-group">
		    <label for="tanggal">Tanggal Ijin</label>
		    <input type="date" class="form-control" id="tanggal_ijin" name="tanggal_ijin" disabled>
		  </div>
		  <div class="form-group">
		    <label for="tanggal">Tanggal Selesai</label>
		    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" disabled>
		  </div>
		  <div class="form-group">
		    <label for="alamat">Alasan</label>
		    <textarea class="form-control" id="alasan" rows="3" name="alasan" disabled></textarea>
		  </div>
		  <div class="form-group">
		    <label for="tanggal">Upload Surat Kegiatan</label>
		    <input type="file" class="form-control" id="upload" name="upload" disabled>
		  </div>
		  <div class="form-group after_upload">
		  	
		  </div>
       <div class="form-group">
        <label for="status">Status </label>
        <select class="form-control" id="status" name="status">
          <option value="menunggu">Menunggu</option>
          <option value="setuju">di Setujui</option>
          <option value="tolak">di Tolak</option>
        </select>
      </div>
      <div class="form-group">
        <label for="catatan">Catatan</label>
        <input type="text" class="form-control" name="catatan" id="catatan">
      </div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Buat Perijinan</button>
        </form>
      </div>
    </div>
  </div>
</div>
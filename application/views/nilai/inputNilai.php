<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Nilai/insertNilai">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Nilai</div>
        <hr>
        <div class="form-group">
          <label for="input-1">Deskripsi</label>
          <textarea type="text" name="deskripsi" id="deskripsi" required class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="input-1">Kategori Nilai</label>
          <select name="kategori_nilai" id="kategori_nilai" class="form-control select2">
            <option value="">Pilihan Kategori Nilai</option>
            <option value="Operator">Operator</option>
            <option value="Non Operator">Non Operator</option>
          </select>
        </div>
        <label for="input-1"></label>
        <div class="form-group">
          <button type="submit" class="btn btn-success px-5 btn-block"> Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="modal modal-blur fade" id="dataKaryawan" tabindex="-1" role="dialog" aria-hidden="true" style="zoom:85%">
  <div class="modal-dialog modal-xl  modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" style="color:black">Data Karyawan</h5>
      </div>
      <div class="modal-body">
        <div id="tabelKaryawan"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {

    MCDatepicker.create({
      el: '#awal_kontrak',
      autoClose: true,
    });

    MCDatepicker.create({
      el: '#akhir_kontrak',
      autoClose: true,
    });


  });
</script>
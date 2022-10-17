<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Nilai/updateNilai">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Edit Data Nilai</div>
        <hr>
        <div class="form-group" hidden>
          <label for="input-1">ID</label>
          <input type="text" value="<?php echo $data['kode_nilai']; ?>" name="kode_nilai" id="kode_nilai" required class="form-control" placeholder="Kode Nilai">
        </div>
        <div class="form-group">
          <label for="input-1">Deskripsi</label>
          <textarea type="text" name="deskripsi" id="deskripsi" required class="form-control"><?php echo $data['deskripsi']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="input-1">Kategori Nilai</label>
          <select name="kategori_nilai" id="kategori_nilai" class="form-control select2">
            <option value="">Pilihan Kategori Nilai</option>
            <option <?php if ($data['kategori_nilai'] == 'Operator') {
                      echo 'selected';
                    } ?> value="Operator">Operator</option>
            <option <?php if ($data['kategori_nilai'] == 'Non Operator') {
                      echo 'selected';
                    } ?> value="Non Operator">Non Operator</option>
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
      el: '#awal_Nilai',
      autoClose: true,
    });

    MCDatepicker.create({
      el: '#akhir_Nilai',
      autoClose: true,
    });

    $("#nama_karyawan,#nik").click(function() {

      $("#tabelKaryawan").load("<?php echo base_url(); ?>surat/tabelKaryawan");
      $("#dataKaryawan").modal("show");

    });
  });
</script>
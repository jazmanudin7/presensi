<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Resign/insertResign">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Keluar</div>
        <hr>
        <div class="form-group">
          <label for="input-1">NIK</label>
          <input type="text" name="nik" id="nik" required class="form-control" placeholder="NIK">
        </div>
        <div class="form-group">
          <label for="input-1">Nama Karyawan</label>
          <input type="text" name="nama_karyawan" id="nama_karyawan" required class="form-control" placeholder="Nama Karyawan">
        </div>
        <div class="form-group">
          <label for="input-1">Departemen</label>
          <input type="text" name="departemen" id="departemen" required class="form-control" placeholder="Departemen">
        </div>
        <div class="form-group">
          <label for="input-1">Tanggal</label>
          <input type="text" name="tanggal" id="tanggal" required class="form-control" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="input-1">Jenis Keluar</label>
            <select class="form-control select2" required id="keterangan" name="keterangan">
                <option value="">PILIH JENIS KELUAR</option>
                <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                <option value="Tidak di Perpanjang">Tidak di Perpanjang</option>
                <option value="Pensiun">Pensiun</option>
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
      el: '#tanggal',
      autoClose: true,
    });

    $("#nama_karyawan,#nik").click(function() {
      $("#tabelKaryawan").load("<?php echo base_url(); ?>surat/tabelKaryawan");
      $("#dataKaryawan").modal("show");

    });
  });
</script>
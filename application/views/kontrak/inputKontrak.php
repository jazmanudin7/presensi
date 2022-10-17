<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>kontrak/insertKontrak">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Kontrak</div>
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
          <label for="input-1">Awal Kontrak</label>
          <input type="text" name="awal_kontrak" id="awal_kontrak" required class="form-control" placeholder="Awal Kontrak">
        </div>
        <div class="form-group">
          <label for="input-1">Akhir Kontrak</label>
          <input type="text" name="akhir_kontrak" id="akhir_kontrak" required class="form-control" placeholder="Akhir Kontrak">
        </div>
        <div class="form-group" hidden>
          <label for="input-1">Kontrak</label>
          <select name="kontrak_ke" id="kontrak_ke" class="form-control select2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Kontrak</label>
          <select name="jenis_kontrak" id="jenis_kontrak" class="form-control select2">
            <option value="">PILIH JENIS KONTRAK</option>
            <option value="KONTRAK">KONTRAK</option>
            <option value="JEDA">JEDA</option>
            <option value="KARTAP">KARTAP</option>
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

    $("#nama_karyawan,#nik").click(function() {
      $("#tabelKaryawan").load("<?php echo base_url(); ?>surat/tabelKaryawan");
      $("#dataKaryawan").modal("show");

    });
  });
</script>
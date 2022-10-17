<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Kontrak/updateKontrak">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Edit Data Kontrak</div>
        <hr>
        <div class="form-group" hidden>
          <label for="input-1">ID</label>
          <input type="text" value="<?php echo $data['kode_kontrak']; ?>" name="kode_kontrak" id="kode_kontrak" required class="form-control" placeholder="Kode Kontrak">
        </div>
        <div class="form-group">
          <label for="input-1">NIK</label>
          <input type="text" value="<?php echo $data['nik']; ?>" name="nik" id="nik" required class="form-control" placeholder="NIK">
        </div>
        <div class="form-group">
          <label for="input-1">Nama Karyawan</label>
          <input type="text" value="<?php echo $data['nama_karyawan']; ?>" name="nama_karyawan" id="nama_karyawan" required class="form-control" placeholder="Nama Karyawan">
        </div>
        <div class="form-group">
          <label for="input-1">Departemen</label>
          <input type="text" value="<?php echo $data['departemen']; ?>" name="departemen" id="departemen" required class="form-control" placeholder="Departemen">
        </div>
        <div class="form-group">
          <label for="input-1">Dari</label>
          <input type="text" value="<?php echo $data['awal_kontrak']; ?>" name="awal_kontrak" id="awal_kontrak" required class="form-control" placeholder="Dari">
        </div>
        <div class="form-group">
          <label for="input-1">Sampai</label>
          <input type="text" value="<?php echo $data['akhir_kontrak']; ?>" name="akhir_kontrak" id="akhir_kontrak" required class="form-control" placeholder="Sampai">
        </div>
        <div class="form-group" hidden>
          <label for="input-1">Kontrak</label>
          <select name="kontrak_ke" id="kontrak_ke" class="form-control select2" required>
            <option value="">PILIH KONTRAK-KE</option>
            <option <?php if ($data['kontrak_ke'] == '1') {
                      echo 'selected';
                    } ?> value="1">1</option>
            <option <?php if ($data['kontrak_ke'] == '2') {
                      echo 'selected';
                    } ?> value="2">2</option>
            <option <?php if ($data['kontrak_ke'] == '3') {
                      echo 'selected';
                    } ?> value="3">3</option>
            <option <?php if ($data['kontrak_ke'] == '4') {
                      echo 'selected';
                    } ?> value="4">4</option>
            <option <?php if ($data['kontrak_ke'] == '5') {
                      echo 'selected';
                    } ?> value="5">5</option>
            <option <?php if ($data['kontrak_ke'] == '6') {
                      echo 'selected';
                    } ?> value="6">6</option>
            <option <?php if ($data['kontrak_ke'] == '7') {
                      echo 'selected';
                    } ?> value="7">7</option>
            <option <?php if ($data['kontrak_ke'] == '8') {
                      echo 'selected';
                    } ?> value="8">8</option>
            <option <?php if ($data['kontrak_ke'] == '9') {
                      echo 'selected';
                    } ?> value="9">9</option>
            <option <?php if ($data['kontrak_ke'] == '10') {
                      echo 'selected';
                    } ?> value="10">10</option>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Kontrak</label>
          <select name="jenis_kontrak" id="jenis_kontrak" class="form-control select2">
            <option value="">PILIH JENIS KONTRAK</option>
            <option <?php if ($data['jenis_kontrak'] == 'KONTRAK') {
                      echo 'selected';
                    } ?> value="KONTRAK">KONTRAK</option>
            <option <?php if ($data['jenis_kontrak'] == 'JEDA') {
                      echo 'selected';
                    } ?> value="JEDA">JEDA</option>
            <option <?php if ($data['jenis_kontrak'] == 'KARTAP') {
                      echo 'selected';
                    } ?> value="KARTAP">KARTAP</option>
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
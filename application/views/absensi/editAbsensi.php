<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>absensi/updateAbsensi">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Edit Data Presensi</div>
        <hr>
        <div class="form-group">
          <label for="input-1">NIK</label>
          <input type="hidden" value="<?php echo $data['kode_absensi']; ?>" name="kode_absensi" id="kode_absensi" required class="form-control" placeholder="Kode">
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
          <label for="input-1">Masuk</label>
          <input type="text" value="<?php echo $data['masuk']; ?>" name="masuk" id="masuk" required class="form-control" placeholder="Masuk">
        </div>
        <div class="form-group">
          <label for="input-1">Pulang</label>
          <input type="text" value="<?php echo $data['pulang']; ?>" name="pulang" id="pulang"  class="form-control" placeholder="Pulang">
        </div>
        <div class="form-group">
          <label for="input-1">Tanggal</label>
          <input type="text" value="<?php echo $data['tanggal']; ?>" name="tanggal" id="tanggal" required class="form-control" placeholder="Tanggal">
        </div>
        <div class="form-group">
          <label for="input-1">Shift</label>
          <select name="shift" id="shift" class="form-control select2">
            <option <?php if ($data['shift'] == 'Non Shift') {
                      echo "selected";
                    } ?> value="Non Shift">Non Shift</option>
            <option <?php if ($data['shift'] == 'Shift 1') {
                      echo "selected";
                    } ?> value="Shift 1">Shift 1</option>
            <option <?php if ($data['shift'] == 'Shift 2') {
                      echo "selected";
                    } ?> value="Shift 2">Shift 2</option>
            <option <?php if ($data['shift'] == 'Shift 3') {
                      echo "selected";
                    } ?> value="Shift 3">Shift 3</option>
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

  });
</script>
<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>absensi/insertAbsensi">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Presensi</div>
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
          <label for="input-1">Shift</label>
          <select name="shift" id="shift" class="form-control select2">
            <option value="Non Shift">Non Shift</option>
            <option value="Shift 1">Shift 1</option>
            <option value="Shift 2">Shift 2</option>
            <option value="Shift 3">Shift 3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Shift</label>
          <select name="jenis_jam" id="jenis_jam" class="form-control select2">
            <option value="Full">Full</option>
            <option value="50">50%</option>
            <option value="25">25%</option>
            <option value="0">0%</option>
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


    $("#form").submit(function() {
      e.preventDefault();
      var nama_mapel = $('#nama_mapel').val();
      var jurusan = $('#jurusan').val();
      if (nama_mapel == "") {
        Swal.fire('Oppss..', 'Mapel Tidak Boleh Kosong', 'warning')
        return false;
      } else if (jurusan == "") {
        Swal.fire('Oppss..', 'Jurusan Tidak Boleh Kosong', 'warning')
        return false;
      } else {
        Swal.fire(
          'Berhasil',
          'Data Mapel Berhasil Disimpan',
          'success'
        )
        return true;
        location.reload();
      }
    });

    $("#jenis_surat").change(function() {
      var jenis_surat = $("#jenis_surat").val();
      if (jenis_surat == "Izin Kepentingan Pribadi (Sebentar)") {
        $('.keluar').show();
        $('.masuk').show();
      } else {
        $('.keluar').hide();
        $('.masuk').hide();
      }
    });

    $("#nama_karyawan,#nik").click(function() {

      $("#tabelKaryawan").load("<?php echo base_url(); ?>surat/tabelKaryawan");
      $("#dataKaryawan").modal("show");

    });
  });
</script>
<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>surat/insertSurat">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Surat Absen</div>
        <hr>
        <div class="mb-3">
          <label for="input-1">NIK</label>
          <input type="text" name="nik" id="nik" required class="form-control" placeholder="NIK">
        </div>
        <div class="mb-3">
          <label for="input-1">Nama Karyawan</label>
          <input type="text" name="nama_karyawan" id="nama_karyawan" required class="form-control" placeholder="Nama Karyawan">
        </div>
        <div class="mb-3">
          <label for="input-1">Departemen</label>
          <input type="text" name="departemen" id="departemen" required class="form-control" placeholder="Departemen">
        </div>
        <div class="mb-3">
          <label for="input-1">Dari</label>
          <input type="text" name="dari" id="dari" required class="form-control" placeholder="Dari">
        </div>
        <div class="mb-3">
          <label for="input-1">Sampai</label>
          <input type="text" name="sampai" id="sampai" required class="form-control" placeholder="Sampai">
        </div>
        <div class="mb-3">
          <label for="input-1">Jenis Surat</label>
          <select name="jenis_surat" id="jenis_surat" class="form-control select2">
            <option value="">Pilih Surat Izin</option>
            <option value="Izin Tidak Masuk Kerja">Izin Tidak Masuk Kerja</option>
            <option value="Izin Kepentingan Pribadi (Sebentar)">Izin Kepentingan Pribadi (Sebentar)</option>
            <option value="Izin Kepentingan Pribadi (Pulang)">Izin Kepentingan Pribadi (Pulang)</option>
            <option value="Izin Kepentingan Kantor">Izin Kepentingan Kantor</option>
            <option value="Sakit Tanpa SID">Sakit Tanpa SID</option>
            <option value="Sakit Dengan SID">Sakit Dengan SID</option>
            <option value="Cuti Tahunan">Cuti Tahunan</option>
            <option value="Cuti Melahirkan/Keguguran">Cuti Melahirkan/Keguguran</option>
            <option value="Izin Khusus Sesuai (PP)">Izin Khusus Sesuai (PP)</option>
            <option value="Alfa">Alfa</option>
          </select>
        </div>
        <div class="mb-3 keluar">
          <label for="input-1">Keluar Kantor</label>
          <input type="text" style="text-align: left;" name="keluar" class="form-control timepicker" id="keluar" placeholder="Keluar Jam : 13:00">
        </div>
        <div class="mb-3 masuk">
          <label for="input-1">Masuk Kantor</label>
          <input type="text" style="text-align: left;" name="masuk" class="form-control timepicker" id="masuk" placeholder="Masuk Jam : 14:00">
        </div>
        <div class="mb-3">
          <label for="input-1">Keterangan</label>
          <textarea name="isi" id="isi" class="form-control" rows="10"></textarea>
        </div>
        <label for="input-1"></label>
        <div class="mb-3">
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

    MCDatepicker.create({
      el: '#dari',
      autoClose: true,
    });

    MCDatepicker.create({
      el: '#sampai',
      autoClose: true,
    });

    $("#nama_karyawan,#nik").click(function() {

      $("#tabelKaryawan").load("<?php echo base_url(); ?>surat/tabelKaryawan");
      $("#dataKaryawan").modal("show");

    });
  });
</script>
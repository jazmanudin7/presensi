<form id="form" method="POST" autocomplete="off" action="<?php echo base_url(); ?>surat/updateSurat"><div class="row mt-3">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Form Edit Data Karyawan</div>
                <hr>
                <div class="mb-3" hidden>
                    <label for="input-1">Kode Surat</label>
                    <input type="text" value="<?php echo $data['kode_surat'];?>" readonly name="kode_surat" id="kode_surat" required class="form-control"  placeholder="Kode Surat">
                </div>
                <div class="mb-3">
                    <label for="input-1">NIK</label>
                    <input type="text" value="<?php echo $data['nik'];?>" readonly name="nik" id="nik" required class="form-control"  placeholder="NIK">
                </div>
                <div class="mb-3">
                    <label for="input-1">Nama Karyawan</label>
                    <input type="text" value="<?php echo $data['nama_karyawan'];?>" readonly name="nama_karyawan" id="nama_karyawan" required class="form-control" placeholder="Nama Karyawan">
                </div>
                <div class="mb-3">
                    <label for="input-1">Departemen</label>
                    <input type="text" value="<?php echo $data['departemen'];?>" readonly name="departemen" id="departemen" required class="form-control" placeholder="Departemen">
                </div>
                <div class="mb-3">
                    <label for="input-1">Tanggal</label>
                    <input type="text" value="<?php echo $data['tanggal'];?>" name="tanggal" id="tanggal" required class="form-control" placeholder="Tanggal">
                </div>
                <div class="mb-3">
                    <label for="input-1">Jenis Surat</label>
                    <select name="jenis_surat" id="jenis_surat" class="form-control select2">
                        <option <?php if($data['jenis_izin'] == 'Izin Tidak Masuk Kerja'){ echo "selected"; } ?> value="Izin Tidak Masuk Kerja">Izin Tidak Masuk Kerja</option>
                        <option <?php if($data['jenis_izin'] == 'Izin Kepentingan Pribadi (Sebentar)'){ echo "selected"; } ?> value="Izin Kepentingan Pribadi (Sebentar)">Izin Kepentingan Pribadi (Sebentar)</option>
                        <option <?php if($data['jenis_izin'] == 'Izin Kepentingan Pribadi (Pulang)'){ echo "selected"; } ?> value="Izin Kepentingan Pribadi (Pulang)">Izin Kepentingan Pribadi (Pulang)</option>
                        <option <?php if($data['jenis_izin'] == 'Izin Kepentingan Kantor'){ echo "selected"; } ?> value="Izin Kepentingan Kantor">Izin Kepentingan Kantor</option>
                        <option <?php if($data['jenis_izin'] == 'Sakit Tanpa SID'){ echo "selected"; } ?> value="Sakit Tanpa SID">Sakit Tanpa SID</option>
                        <option <?php if($data['jenis_izin'] == 'Sakit Dengan SID'){ echo "selected"; } ?> value="Sakit Dengan SID">Sakit Dengan SID</option>
                        <option <?php if($data['jenis_izin'] == 'Cuti Tahunan'){ echo "selected"; } ?> value="Cuti Tahunan">Cuti Tahunan</option>
                        <option <?php if($data['jenis_izin'] == 'Cuti Melahirkan/Keguguran'){ echo "selected"; } ?> value="Cuti Melahirkan/Keguguran">Cuti Melahirkan/Keguguran</option>
                        <option <?php if($data['jenis_izin'] == 'Izin Khusus Sesuai (PP)'){ echo "selected"; } ?> value="Izin Khusus Sesuai (PP)">Izin Khusus Sesuai (PP)</option>
                        <option <?php if($data['jenis_izin'] == 'Alfa'){ echo "selected"; } ?> value="Alfa">Alfa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="input-1">Keterangan</label>
                    <textarea name="isi" id="isi" class="form-control" rows="10"><?php echo $data['isi'];?></textarea>
                </div>
                <div class="mb-3">
                    <label for="input-1"></label>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success px-5 btn-block"> Simpan</button>
                    </div>
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
      var nama_mapel      = $('#nama_mapel').val();
      var jurusan         = $('#jurusan').val();
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
    
    
    $("#nama_karyawan,#nik").click(function() {
    
        $("#tabelKaryawan").load("<?php echo base_url(); ?>lembur/tabelKaryawan");
        $("#dataKaryawan").modal("show");

    });
  });
</script>
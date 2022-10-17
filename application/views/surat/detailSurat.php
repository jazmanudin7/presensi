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
                <label for="input-1">Judul</label>
                <input type="text" value="<?php echo $data['judul'];?>" readonly name="judul" id="judul" required class="form-control" placeholder="Judul Surat">
            </div>
            <div class="mb-3">
                <label for="input-1">Tanggal</label>
                <input type="text" value="<?php echo $data['tanggal'];?>" readonly name="tanggal" id="tanggal" required class="form-control" placeholder="Tanggal">
            </div>
            <div class="mb-3">
                <label for="input-1">Tanggal</label>
                <input type="text" value="<?php echo $data['jenis_izin'];?>" readonly name="tanggal" id="tanggal" required class="form-control" placeholder="Tanggal">
            </div>
            <div class="mb-3">
                <label for="input-1">Keterangan</label>
                <textarea name="isi" id="isi" readonly class="form-control" rows="10"><?php echo $data['isi'];?></textarea>
            </div
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
    
  });
</script>
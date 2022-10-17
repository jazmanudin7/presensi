<form id="form" method="POST" autocomplete="off" action="<?php echo base_url(); ?>karyawan/insertKaryawan">
  <div class="row mt-3">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Form Input Data Karyawan</div>
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
            <label for="input-1">Tanggal Masuk</label>
            <input type="text" name="tgl_masuk" id="tgl_masuk" required class="form-control" placeholder="Tanggal Masuk">
          </div>
          <div class="form-group">
            <label for="input-1">Departemen</label>
            <select name="departemen" id="departemen" class="form-control select2">
              <option value="">-- PILIH DEPARTEMEN --</option>
              <?php foreach ($dept->result() as $d) { ?>
                <option value="<?php echo $d->nama_dept; ?>"><?php echo $d->nama_dept; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Group</label>
            <select name="group" id="group" class="form-control select2">
              <option value="">-- PILIH GROUP --</option>
              <?php foreach ($group->result() as $d) { ?>
                <option value="<?php echo $d->nama_group; ?>"><?php echo $d->nama_group; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" required class="form-control" placeholder="Jabatan">
          </div>
          <div class="form-group">
            <label for="input-1">Kantor</label>
            <select name="kantor" id="kantor" class="form-control select2">
              <option value="PUSAT">PUSAT</option>
              <option value="BANDUNG">BANDUNG</option>
              <option value="BOGOR">BOGOR</option>
              <option value="PURWOKERTO">PURWOKERTO</option>
              <option value="GARUT">GARUT</option>
              <option value="SUKABUMI">SUKABUMI</option>
              <option value="TEGAL">TEGAL</option>
              <option value="YOGYAKARTA">YOGYAKARTA</option>
              <option value="SURABAYA">SURABAYA</option>
              <option value="SEMARANG">SEMARANG</option>
              <option value="PURWAKARTA">PURWAKARTA</option>
              <option value="TASIKMALAYA">TASIKMALAYA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Perusahaan</label>
            <select name="perusahaan" id="perusahaan" class="form-control select2">
              <option value="MP">MP</option>
              <option value="PCF">PCF</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control select2">
              <option value="LAKI-LAKI">LAKI-LAKI</option>
              <option value="PEREMPUAN">PEREMPUAN</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Status Kawin</label>
            <select name="status_kawin" id="status_kawin" class="form-control select2">
              <option value="MENIKAH">MENIKAH</option>
              <option value="BELUM MENIKAH">BELUM MENIKAH</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          .
          <hr>
          <div class="form-group">
            <label for="input-1">Status Karyawan</label>
            <select name="status_karyawan" id="status_karyawan" class="form-control select2">
              <option value="KONTRAK">KONTRAK</option>
              <option value="KARTAP">KARTAP</option>
              <option value="PHL">PHL</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Pendidikan</label>
            <select name="pendidikan" id="pendidikan" class="form-control select2">
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="D4">D4</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" required class="form-control" placeholder="Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="input-1">Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" id="tgl_lahir" required class="form-control" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group">
            <label for="input-1">NIK KTP</label>
            <input type="text" name="nik_ktp" id="nik_ktp" required class="form-control" placeholder="NIK KTP">
          </div>
          <div class="form-group">
            <label for="input-1">Alamat</label>
            <input type="text" name="alamat" id="alamat" required class="form-control" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="input-1">No HP</label>
            <input type="text" name="no_hp" id="no_hp" required class="form-control" placeholder="No HP">
          </div>
          <div class="form-group">
            <label for="input-1">ISO</label>
            <select name="iso" id="iso" class="form-control select2">
              <option value="NO">NO</option>
              <option value="YES">YES</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Berkas</label>
            <select name="berkas" id="berkas" class="form-control select2">
              <option value="ADA">ADA</option>
              <option value="TDK ADA">TIDAK ADA</option>
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

    MCDatepicker.create({
      el: '#tgl_masuk',
      autoClose: true,
    });

    MCDatepicker.create({
      el: '#tgl_lahir',
      autoClose: true,
    });

  });
</script>
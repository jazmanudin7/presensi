<form id="form" method="POST" autocomplete="off" action="<?php echo base_url(); ?>karyawan/updateKaryawan"><div class="row mt-3">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Form Edit Data Karyawan</div>
        <hr>
          <div class="form-group">
            <label for="input-1">NIK</label>
            <input type="text" readonly name="nik" id="nik" value="<?php echo $data['nik']; ?>" required class="form-control"  placeholder="NIK">
          </div>
          <div class="form-group">
            <label for="input-1">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $data['nama_karyawan']; ?>" required class="form-control" placeholder="Nama Karyawan">
          </div>
          <div class="form-group">
            <label for="input-1">Tanggal Masuk</label>
            <input type="text" name="tgl_masuk" id="tgl_masuk" value="<?php echo $data['tgl_masuk']; ?>" required class="form-control" placeholder="Tanggal Masuk">
          </div>
          <div class="form-group">
            <label for="input-1">Departemen</label>
            <input type="text" name="departemen" id="departemen" value="<?php echo $data['departemen']; ?>" required class="form-control" placeholder="Departemen">
          </div>
          <div class="form-group">
            <label for="input-1">Group</label>
            <input type="text" name="group" id="group" value="<?php echo $data['group']; ?>" required class="form-control" placeholder="Group">
          </div>
          <div class="form-group">
            <label for="input-1">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" value="<?php echo $data['jabatan']; ?>" required class="form-control" placeholder="Jabatan">
          </div>
          <div class="form-group">
            <label for="input-1">Kantor</label>
            <select name="kantor" id="kantor" class="form-control select2">
                <option <?php if($data['jabatan'] == 'PUSAT'){ echo 'selected'; } ?> value="PUSAT">PUSAT</option>
                <option <?php if($data['jabatan'] == 'BANDUNG'){ echo 'selected'; } ?> value="BANDUNG">BANDUNG</option>
                <option <?php if($data['jabatan'] == 'BOGOR'){ echo 'selected'; } ?> value="BOGOR">BOGOR</option>
                <option <?php if($data['jabatan'] == 'PURWOKERTO'){ echo 'selected'; } ?> value="PURWOKERTO">PURWOKERTO</option>
                <option <?php if($data['jabatan'] == 'GARUT'){ echo 'selected'; } ?> value="GARUT">GARUT</option>
                <option <?php if($data['jabatan'] == 'SUKABUMI'){ echo 'selected'; } ?> value="SUKABUMI">SUKABUMI</option>
                <option <?php if($data['jabatan'] == 'TEGAL'){ echo 'selected'; } ?> value="TEGAL">TEGAL</option>
                <option <?php if($data['jabatan'] == 'KLATEN'){ echo 'selected'; } ?> value="KLATEN">KLATEN</option>
                <option <?php if($data['jabatan'] == 'SURABAYA'){ echo 'selected'; } ?> value="SURABAYA">SURABAYA</option>
                <option <?php if($data['jabatan'] == 'SEMARANG'){ echo 'selected'; } ?> value="SEMARANG">SEMARANG</option>
                <option <?php if($data['jabatan'] == 'TASIKMALAYA'){ echo 'selected'; } ?> value="TASIKMALAYA">TASIKMALAYA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Perusahaan</label>
            <select name="perusahaan" id="perusahaan" class="form-control select2">
                <option <?php if($data['perusahaan'] == 'MP'){ echo 'selected'; } ?> value="MP">MP</option>
                <option <?php if($data['perusahaan'] == 'PCF'){ echo 'selected'; } ?> value="PCF">PCF</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control select2">
                <option <?php if($data['jk'] == 'LAKI-LAKI'){ echo 'selected'; } ?> value="LAKI-LAKI">LAKI-LAKI</option>
                <option <?php if($data['jk'] == 'PEREMPUAN'){ echo 'selected'; } ?> value="PEREMPUAN">PEREMPUAN</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Status Kawin</label>
            <select name="status_kawin" id="status_kawin" class="form-control select2">
                <option <?php if($data['status_kawin'] == 'MENIKAH'){ echo 'selected'; } ?> value="MENIKAH">MENIKAH</option>
                <option <?php if($data['status_kawin'] == 'BELUM MENIKAH'){ echo 'selected'; } ?> value="BELUM MENIKAH">BELUM MENIKAH</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Status Karyawan</label>
            <select name="status_karyawan" id="status_karyawan" class="form-control select2">
                <option <?php if($data['status_karyawan'] == 'KONTRAK'){ echo 'selected'; } ?> value="KONTRAK">KONTRAK</option>
                <option <?php if($data['status_karyawan'] == 'TETAP'){ echo 'selected'; } ?> value="TETAP">TETAP</option>
                <option <?php if($data['status_karyawan'] == 'BORONGAN'){ echo 'selected'; } ?> value="BORONGAN">BORONGAN</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Pendidikan</label>
            <select name="pendidikan" id="pendidikan" class="form-control select2">
                <option <?php if($data['pendidikan'] == 'SD'){ echo 'selected'; } ?> value="SD">SD</option>
                <option <?php if($data['pendidikan'] == 'SMP'){ echo 'selected'; } ?> value="SMP">SMP</option>
                <option <?php if($data['pendidikan'] == 'SMA'){ echo 'selected'; } ?> value="SMA">SMA</option>
                <option <?php if($data['pendidikan'] == 'D1'){ echo 'selected'; } ?> value="D1">D1</option>
                <option <?php if($data['pendidikan'] == 'D2'){ echo 'selected'; } ?> value="D2">D2</option>
                <option <?php if($data['pendidikan'] == 'D3'){ echo 'selected'; } ?> value="D3">D3</option>
                <option <?php if($data['pendidikan'] == 'D4'){ echo 'selected'; } ?> value="D4">D4</option>
                <option <?php if($data['pendidikan'] == 'S1'){ echo 'selected'; } ?> value="S1">S1</option>
                <option <?php if($data['pendidikan'] == 'S2'){ echo 'selected'; } ?> value="S2">S2</option>
                <option <?php if($data['pendidikan'] == 'S3'){ echo 'selected'; } ?> value="S3">S3</option>
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
            <label for="input-1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" required class="form-control" placeholder="Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="input-1">Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required class="form-control" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group">
            <label for="input-1">NIK KTP</label>
            <input type="text" name="nik_ktp" id="nik_ktp" value="<?php echo $data['nik_ktp']; ?>" required class="form-control" placeholder="NIK KTP">
          </div>
          <div class="form-group">
            <label for="input-1">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" required class="form-control" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="input-1">No HP</label>
            <input type="text" name="no_hp" id="no_hp" value="<?php echo $data['no_hp']; ?>" required class="form-control" placeholder="No HP">
          </div>
          <div class="form-group">
            <label for="input-1">ISO</label>
            <select name="iso" id="iso" class="form-control select2">
                <option <?php if($data['iso'] == 'NO'){ echo 'selected'; } ?> value="NO">NO</option>
                <option <?php if($data['iso'] == 'YES'){ echo 'selected'; } ?> value="YES">YES</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Berkas</label>
            <select name="berkas" id="berkas" class="form-control select2">
                <option <?php if($data['berkas'] == 'ADA'){ echo 'selected'; } ?> value="ADA">ADA</option>
                <option <?php if($data['berkas'] == 'TDK ADA'){ echo 'selected'; } ?> value="TDK ADA">TIDAK ADA</option>
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
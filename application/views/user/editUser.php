<form id="form" method="POST" autocomplete="off" action="<?php echo base_url(); ?>User/updateUser">
  <div class="row mt-3">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Form Edit User</div>
          <hr>
          <div class="form-group">
            <label for="input-1">NIK</label>
            <input type="text" value="<?php echo $data['nik']; ?>" name="nik" id="nik" required class="form-control" placeholder="NIK">
          </div>
          <div class="form-group">
            <label for="input-1">Nama Karyawan</label>
            <input type="text" value="<?php echo $data['nama_karyawan']; ?>" name="nama_karyawan" id="nama_karyawan" required class="form-control" placeholder="Nama Karyawan">
          </div>
          <div class="form-group">
            <label for="input-1">Akses Web</label>
            <select name="akses_web" id="akses_web" class="form-control select2">
              <option <?php if ($data['akses_web'] == '1') {
                        echo "selected";
                      } ?> value="1">Beri Akses</option>
              <option <?php if ($data['akses_web'] == '') {
                        echo "selected";
                      } ?> value="">Tidak Diberi Akses</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Approval Head Dept</label>
            <input type="text" value="<?php echo $data['head_dept']; ?>" name="head_dept" id="head_dept" required class="form-control" placeholder="Head Dept">
          </div>
          <div class="form-group">
            <label for="input-1">Approval HRD</label>
            <select name="hrd" id="hrd" class="form-control select2">
              <option <?php if ($data['head_dept'] == 'YES') {
                        echo "selected";
                      } ?> value="YES">YES</option>
              <option <?php if ($data['head_dept'] == '') {
                        echo "selected";
                      } ?> value="">TIDAK</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Approval Security</label>
            <select name="security" id="security" class="form-control select2">
              <option <?php if ($data['security'] == 'YES') {
                        echo "selected";
                      } ?> value="YES">YES</option>
              <option <?php if ($data['security'] == '') {
                        echo "selected";
                      } ?> value="">TIDAK</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1">Level</label>
            <select name="level" id="level" class="form-control select2">
              <option <?php if ($data['level'] == 'MANAGER') {
                        echo "selected";
                      } ?> value="MANAGER">MANAGER</option>
              <option <?php if ($data['level'] == 'ADMINISTRATOR') {
                        echo "selected";
                      } ?> value="ADMINISTRATOR">ADMINISTRATOR</option>
              <option <?php if ($data['level'] == 'ADMIN') {
                        echo "selected";
                      } ?> value="ADMIN">ADMIN</option>
              <option <?php if ($data['level'] == 'HRD') {
                        echo "selected";
                      } ?> value="HRD">HRD</option>
              <option <?php if ($data['level'] == 'SPV HRD') {
                        echo "selected";
                      } ?> value="SPV HRD">SPV HRD</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input-1"></label>
            <div class="form-group">
              <button type="submit" class="btn btn-success px-5 btn-block"> Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
  $(document).ready(function() {


  });
</script>
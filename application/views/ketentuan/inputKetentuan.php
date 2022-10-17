<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Ketentuan/insertKetentuan">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Ketentuan</div>
        <hr>
        <div class="mb-3">
          <label for="input-1">Jabatan</label>
          <select class="form-control select2" required id="jabatan" name="jabatan">
            <option value="">~~ Pilih Jabatan ~~</option>
            <?php foreach ($jabatan->result() as $d) { ?>
              <option value="<?php echo $d->jabatan; ?>"><?php echo $d->jabatan; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Keterangan</label>
          <input type="text" name="keterangan" id="keterangan" required class="form-control" placeholder="Keterangan">
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

    MCDatepicker.create({
      el: '#tanggal',
      autoClose: true,
    });
  });
</script>
<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Ketentuan/updateKetentuan">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Ketentuan</div>
        <hr>
        <input type="hidden" value="<?php echo $data['kode_ketentuan']; ?>" name="kode_ketentuan" id="kode_ketentuan" required class="form-control" placeholder="Kode Ketentuan">
        <div class="mb-3">
          <label for="input-1">Jabatan</label>
          <select class="form-control select2" required id="jabatan" name="jabatan">
            <option value="">~~ Pilih Jabatan ~~</option>
            <?php foreach ($jabatan->result() as $d) { ?>
              <option <?php if ($data['jabatan'] == $d->jabatan) {
                        echo "selected";
                      } ?> value="<?php echo $d->jabatan; ?>"><?php echo $d->jabatan; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Keterangan</label>
          <input type="text" value="<?php echo $data['keterangan']; ?>" name="keterangan" id="keterangan" required class="form-control" placeholder="Keterangan">
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
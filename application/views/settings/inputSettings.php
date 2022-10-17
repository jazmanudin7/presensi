<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Settings/insertSettings">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Settings</div>
        <hr>
        <div class="form-group">
          <label for="input-1">Bulan</label>
          <select class="form-control select2" required id="bulan" name="bulan">
            <option value="">~~ Pilih Bulan ~~</option>
            <?php for ($a = 1; $a <= 12; $a++) { ?>
              <option value="<?php echo $a;  ?>"><?php echo $bulan[$a]; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Tahun</label>
          <select class="form-control select2" required id="tahun" name="tahun">
            <option value="">~~ Pilih Tahun ~~</option>
            <?php for ($t = 2021; $t <= $tahun; $t++) { ?>
              <option value="<?php echo $t;  ?>"><?php echo $t; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="input-1">Dari</label>
          <input type="text" name="dari" id="dari" required class="form-control" placeholder="Dari">
        </div>
        <div class="form-group">
          <label for="input-1">Sampai</label>
          <input type="text" name="sampai" id="sampai" required class="form-control" placeholder="Sampai">
        </div>
        <div class="form-group">
          <label for="input-1">Jumlah Hari</label>
          <input type="text" name="jumlahHari" id="jumlahHari" required class="form-control" placeholder="Jumlah Hari">
        </div>
        <div class="form-group">
          <label for="input-1">Jumlah Jam</label>
          <input type="text" name="jumlahJam" id="jumlahJam" required class="form-control" placeholder="Jumlah Jam">
        </div>
        <div class="form-group">
          <label for="input-1">Premi Shift 2</label>
          <input type="text" style="text-align: right" name="premi2" id="premi2" required class="form-control" placeholder="Premi Shift 2">
        </div>
        <div class="form-group">
          <label for="input-1">Premi Shift 3</label>
          <input type="text" style="text-align: right" name="premi3" id="premi3" required class="form-control" placeholder="Premi Shift 3">
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
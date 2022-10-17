<form id="formid" method="POST" autocomplete="off" action="<?php echo base_url(); ?>Gaji/insertDetailGaji">
  <div class="row mt-3">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Input Upah Karywan</div>
          <hr>
          <input type="hidden" id="nobukti" name="nobukti" value="<?php echo $this->uri->segment(3); ?>">
          <div class="mb-3">
            <select class="form-control select2" readonly id="bulan" name="bulan">
              <option value="">~~ Pilih Bulan ~~</option>
              <?php for ($a = 1; $a <= 12; $a++) { ?>
                <option <?php if ($data['bulan'] == $a) {
                          echo "selected";
                        } ?> value="<?php echo $a;  ?>"><?php echo $bulan[$a]; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <select class="form-control select2" readonly id="tahun" name="tahun">
              <option value="">~~ Pilih Tahun ~~</option>
              <?php for ($t = 2021; $t <= $tahun; $t++) { ?>
                <option <?php if ($data['tahun'] == $t) {
                          echo "selected";
                        } ?> value="<?php echo $t;  ?>"><?php echo $t; ?></option>
              <?php } ?>
            </select>
          </div>

        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" align="center">Data Karyawan</h5>
          <div class="table-responsive">
            <table id="" class="table table-hover table-striped table-sm">
              <thead>
                <tr style="color:black">
                  <th>NIK</th>
                  <th>Nama Karyawan</th>
                  <th>Group</th>
                  <th>Gaji Pokok</th>
                  <th>Masa Kerja</th>
                  <th>Jabatan</th>
                  <th>T. Jawab</th>
                  <th>Makan</th>
                  <th>Istri/D/J</th>
                  <th>Skill Khusus</th>
                </tr>
              </thead>
              <tbody id="loaddetailgaji">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</form>

<script type="text/javascript">
  $(document).ready(function() {

    function formatAngka(angka) {
      if (typeof(angka) != 'string') angka = angka.toString();
      var reg = new RegExp('([0-9]+)([0-9]{3})');
      while (reg.test(angka)) angka = angka.replace(reg, '$1,$2');
      return angka;
    }

    loaddetailgaji();

    function loaddetailgaji() {
      var nobukti = $("#nobukti").val();
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/loaddetailgaji',
        data: {
          nobukti: nobukti,
        },
        cache: false,
        success: function(respond) {
          $("#loaddetailgaji").html(respond);
        }
      });
    }

  });
</script>
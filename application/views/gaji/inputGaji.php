<form id="formid" method="POST" autocomplete="off" action="<?php echo base_url(); ?>Gaji/insertGaji">
  <div class="row mt-3">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Input Gaji</div>
          <hr>
          <div class="mb-3">
            <select class="form-control select2" required id="bulan" name="bulan">
              <option value="">~~ Pilih Bulan ~~</option>
              <?php for ($a = 1; $a <= 12; $a++) { ?>
                <option value="<?php echo $a;  ?>"><?php echo $bulan[$a]; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <select class="form-control select2" required id="tahun" name="tahun">
              <option value="">~~ Pilih Tahun ~~</option>
              <?php for ($t = 2021; $t <= $tahun; $t++) { ?>
                <option value="<?php echo $t;  ?>"><?php echo $t; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group" style="zoom:100%">
            <button class="btn btn-lg btn-success btn-block">Simpan</button>
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

    function formatAngka(angka) {
      if (typeof(angka) != 'string') angka = angka.toString();
      var reg = new RegExp('([0-9]+)([0-9]{3})');
      while (reg.test(angka)) angka = angka.replace(reg, '$1,$2');
      return angka;
    }


    $("#nama_karyawan").click(function() {

      $("#tabelKaryawan").load("<?php echo base_url(); ?>Gaji/tabelKaryawan");
      $("#dataKaryawan").modal("show");

    });

    $('#tanggal').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('#tanggal').datepicker("setDate", new Date());

    $("#form").submit(function() {
      e.preventDefault();
      var departemen = $('#departemen').val();
      if (departemen == '') {

        Swal.fire("Oops", "Pilih Departemen Terlebih dahulu", "warning");
        return false;

      } else {
        Swal.fire(
          'Berhasil',
          'Data Barang Berhasil Disimpan',
          'success'
        )
        return true;
        location.reload();
      }
    });

    tampiltemp();

    function tampiltemp() {

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>Gaji/viewDetailGajiTemp',
        data: '',
        cache: false,
        success: function(html) {

          $("#loadGajitemp").html(html);

          $("#nik").val("");
          $("#nama_karyawan").val("");
          $("#dari").val("");
          $("#keperluan").val("");
          $("#keterangan").val("");

        }

      });
    }

    $('#tambahkaryawan').on("click", function() {

      var nik = $("#nik").val();
      var dari = $("#dari").val();
      var keperluan = $("#keperluan").val();
      var keterangan = $("#keterangan").val();
      var kode_edit = $("#kode_edit").val();

      if (nik == '') {

        Swal.fire("Oops", "Karyawan Belum diPilih", "warning");
        return false;

      } else if (dari == '') {

        Swal.fire("Oops", "Dari Harus Diisi", "warning");
        return false;

      } else if (dari == '') {

        Swal.fire("Oops", "Dari Harus Diisi", "warning");
        return false;

      } else {
        $.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>Gaji/insertGajiTemp',
          data: {
            nik: nik,
            dari: dari,
            keperluan: keperluan,
            keterangan: keterangan,
            kode_edit: kode_edit,
          },
          cache: false,
          success: function(respond) {


            tampiltemp();
            $('#nama_karyawan').focus();
          }
        });
      }

    });

    $('#formid').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
        e.preventDefault();
        return false;
      }
    });


  });
</script>
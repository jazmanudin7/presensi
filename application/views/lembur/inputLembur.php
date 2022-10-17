<form id="formid" method="POST" autocomplete="off" action="<?php echo base_url(); ?>lembur/insertLembur">
  <div class="row mt-3">
    <div class="col-lg-5">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Input Lembur</div>
          <br>
          <div class="mb-3">
            <input type="hidden" name="kode_edit" class="form-control" id="kode_edit" placeholder="Kode Edit">
            <input type="text" name="tanggal" required class="form-control" id="tanggal" placeholder="Tanggal">
          </div>
          <div class="mb-3">
            <select class="form-control select2" id="departemen" required name="departemen">
              <option value="AKUNTANSI">AKUNTANSI</option>
              <option value="AUDIT">AUDIT</option>
              <option value="FINANCE">FINANCE</option>
              <option value="GA">GA</option>
              <option value="GUDANG">GUDANG</option>
              <option value="HRD">HRD</option>
              <option value="MAINTENANCE">MAINTENANCE</option>
              <option value="PDQC">PDQC</option>
              <option value="PRODUKSI">PRODUKSI</option>
              <option value="PURCHASING">PURCHASING</option>
            </select>
          </div>
          <div class="mb-3">
            <input type="hidden" name="nik" class="form-control" id="nik" placeholder="NIK">
            <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" placeholder="Nama Karyawan">
          </div>
          <div class="mb-3">
            <input type="text" style="text-align: left;" name="dari" class="form-control timepicker" id="dari" placeholder="Dari : 13:00">
          </div>
          <div class="mb-3">
            <input type="text" style="text-align: left;" name="sampai" class="form-control timepicker" id="sampai" placeholder="Sampai : 13:00">
          </div>
          <div class="mb-3">
            <input type="text" name="keperluan" class="form-control" id="keperluan" placeholder="Keperluan">
          </div>
          <div class="mb-3">
            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
          </div>
          <div class="mb-3">
            <select name="jenis_lembur" id="jenis_lembur" class="form-control select2">
              <option value="">JENIS LEMBUR</option>
              <option value="OT">OT</option>
              <option value="PL">PL</option>
              <option value="SL">SL</option>
              <option value="ML">ML</option>
            </select>
          </div>
          <div class="mb-3">
            <button class="btn btn-success btn-block">Simpan</button>
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

      var departemen = $("#departemen").val();
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>lembur/tabelKaryawanTemp',
        data: {
          departemen: departemen
        },
        cache: false,
        success: function(html) {

          $("#tabelKaryawan").html(html);
          $("#dataKaryawan").modal("show");
        }

      });

    });

    MCDatepicker.create({
      el: '#tanggal',
      autoClose: true,
    });
    
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
        url: '<?php echo base_url(); ?>lembur/viewDetailLemburTemp',
        data: '',
        cache: false,
        success: function(html) {

          $("#loadlemburtemp").html(html);

          $("#nik").val("");
          $("#nama_karyawan").val("");
          $("#dari").val("");
          $("#sampai").val("");
          $("#keperluan").val("");
          $("#keterangan").val("");
          $("#jenis_lembur").val("");

        }

      });
    }

    $('#tambahkaryawan').on("click", function() {

      var nik = $("#nik").val();
      var dari = $("#dari").val();
      var sampai = $("#sampai").val();
      var keperluan = $("#keperluan").val();
      var keterangan = $("#keterangan").val();
      var kode_edit = $("#kode_edit").val();
      var jenis_lembur = $("#jenis_lembur").val();

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
          url: '<?php echo base_url(); ?>lembur/insertLemburTemp',
          data: {
            nik: nik,
            dari: dari,
            sampai: sampai,
            keperluan: keperluan,
            keterangan: keterangan,
            kode_edit: kode_edit,
            jenis_lembur: jenis_lembur,
          },
          cache: false,
          success: function(respond) {


            tampiltemp();
            $('#nama_karyawan').focus();

            $('#kode_edit').val(0);
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
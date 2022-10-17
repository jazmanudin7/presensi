</form><form id="formid" method="POST" autocomplete="off" action="<?php echo base_url(); ?>lembur/updateLembur">
    <div class="row mt-3">
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
                <div class="card-title">Edit Lembur</div>
                <hr>
                <div class="mb-3">
                    <input type="hidden" name="kode_lembur" value="<?php echo $data['kode_lembur'];?>" required class="form-control" id="kode_lembur" placeholder="Kode Lembur">
                    <input type="text" name="tanggal" value="<?php echo $data['tanggal'];?>" required class="form-control" id="tanggal" placeholder="Tanggal">
                </div>
                <div class="mb-3">
                    <select class="form-control select2" id="departemen" required name="departemen">
                        <option <?php if($data['departemen'] == 'AKUNTANSI'){ echo "selected"; } ?> value="AKUNTANSI">AKUNTANSI</option>
                        <option <?php if($data['departemen'] == 'AUDIT'){ echo "selected"; } ?> value="AUDIT">AUDIT</option>
                        <option <?php if($data['departemen'] == 'FINANCE'){ echo "selected"; } ?> value="FINANCE">FINANCE</option>
                        <option <?php if($data['departemen'] == 'GA'){ echo "selected"; } ?> value="GA">GA</option>
                        <option <?php if($data['departemen'] == 'GUDANG'){ echo "selected"; } ?> value="GUDANG">GUDANG</option>
                        <option <?php if($data['departemen'] == 'HRD'){ echo "selected"; } ?> value="HRD">HRD</option>
                        <option <?php if($data['departemen'] == 'MAINTENANCE'){ echo "selected"; } ?> value="MAINTENANCE">MAINTENANCE</option>
                        <option <?php if($data['departemen'] == 'PDQC'){ echo "selected"; } ?> value="PDQC">PDQC</option>
                        <option <?php if($data['departemen'] == 'PRODUKSI'){ echo "selected"; } ?> value="PRODUKSI">PRODUKSI</option>
                        <option <?php if($data['departemen'] == 'PURCHASING'){ echo "selected"; } ?> value="PURCHASING">PURCHASING</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="nik" class="form-control" id="nik" value="<?php echo $data['nik'];?>" placeholder="NIK">
                    <input type="text" name="nama_karyawan" class="form-control" value="<?php echo $data['nama_karyawan'];?>" id="nama_karyawan" placeholder="Nama Karyawan">
                </div>
                <div class="mb-3">
                  <input type="text" style="text-align: left;" name="dari" class="form-control timepicker" value="<?php echo $data['dari'];?>" id="dari" placeholder="Dari : 13:00">
                </div>
                <div class="mb-3">
                  <input type="text" style="text-align: left;" name="sampai" class="form-control timepicker" value="<?php echo $data['sampai'];?>" id="sampai" placeholder="Sampai : 13:00">
                </div>
                <div class="mb-3">
                  <input type="text" name="keperluan" class="form-control" id="keperluan" value="<?php echo $data['keperluan'];?>" placeholder="Keperluan">
                </div>
                <div class="mb-3">
                  <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $data['keterangan'];?>" placeholder="Keterangan">
                </div>
                <div class="mb-3">
                    <select name="jenis_lembur" id="jenis_lembur" class="form-control select2">
                        <option value="">JENIS LEMBUR</option>
                        <option <?php if($data['jenis_lembur'] == 'OT'){ echo "selected"; } ?> value="OT">OT</option>
                        <option <?php if($data['jenis_lembur'] == 'PL'){ echo "selected"; } ?> value="PL">PL</option>
                        <option <?php if($data['jenis_lembur'] == 'SL'){ echo "selected"; } ?> value="SL">SL</option>
                        <option <?php if($data['jenis_lembur'] == 'ML'){ echo "selected"; } ?> value="ML">ML</option>
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

        var departemen  = $("#departemen").val();
        $.ajax({
            type    : 'POST',
            url     : '<?php echo base_url();?>lembur/tabelKaryawanTemp',
            data    : 
            {
                departemen : departemen
            },
            cache   : false,
            success : function(html){
            
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
    

    $('#tambahkaryawan').on("click", function() {

      var nik           = $("#nik").val();
      var dari          = $("#dari").val();
      var sampai        = $("#sampai").val();
      var keperluan     = $("#keperluan").val();
      var keterangan    = $("#keterangan").val();
      var kode_edit     = $("#kode_edit").val();
      var jenis_lembur  = $("#jenis_lembur").val();

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
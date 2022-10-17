<?php
$no=1;
$grandtotal = 0;
foreach($data->result() as $d){
  ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $d->nik; ?></td>
    <td><?php echo $d->nama_karyawan; ?></td>
    <td><?php echo $d->dari; ?></td>
    <td><?php echo $d->sampai; ?></td>
    <td><?php echo $d->keperluan; ?></td>
    <td><?php echo $d->keterangan; ?></td>
    <td><?php echo $d->jenis_lembur; ?></td>
    <td align="left"><a href="#" data-nobukti="<?php echo $d->kode_lembur; ?>" data-nik="<?php echo $d->nik; ?>" class="btn btn-danger btn-sm hapus">Hapus</a> 
    <a href="#" data-id="<?php echo $d->kode_lembur; ?>" data-nik="<?php echo $d->nik; ?>"  data-jenis="<?php echo $d->jenis_lembur; ?>" data-nama="<?php echo $d->nama_karyawan; ?>" data-sampai="<?php echo $d->sampai; ?>" data-dari="<?php echo $d->dari; ?>" data-ket="<?php echo $d->keterangan; ?>" data-keperluan="<?php echo $d->keperluan; ?>" class="btn btn-warning btn-sm edit">Edit</a></td>
    </tr>
    <?php $no++;} ?>
    <script type="text/javascript">

      $(function(){

        function tampiltemp(){

          $.ajax({
            type    : 'POST',
            url     : '<?php echo base_url();?>lembur/viewDetailLembur',
            data    : '',
            cache   : false,
            success : function(html){

                $("#loadlemburtemp").html(html);

                $('#barang').val("");
                $('#kodeakun').val("");
                $('#kodebarang').val("");
                $('#namaakun').val("");
                $('#jumlah').val("");
                $('#harga').val("");
                $('#keterangan').val("");
                $('#jenis_lembur').val("");

            }

          });
        }

        $(".hapus").click(function(e){
          var nik               = $(this).attr("data-nik");
          var nobukti           = $(this).attr("data-nobukti");
          e.preventDefault();
          $.ajax({
            type    : 'POST',
            url     : '<?php echo base_url(); ?>lembur/hapusDetailLembur',
            data    : {
              nik               : nik,
              nobukti           : nobukti,
            },
            cache   : false,
            success   : function(respond){

                tampiltemp();

            }
          });
        });
        
        

        $(".edit").click(function(e){
          e.preventDefault();
          var nik           = $(this).attr("data-nik");
          var nama          = $(this).attr("data-nama");
          var dari          = $(this).attr("data-dari");
          var sampai        = $(this).attr("data-sampai");
          var keperluan     = $(this).attr("data-keperluan");
          var ket           = $(this).attr("data-ket");
          var jenis_lembur  = $(this).attr("data-jenis");
          $('#nik').val(nik);
          $('#keperluan').val(keperluan);
          $('#dari').val(dari);
          $('#sampai').val(sampai);
          $('#nama_karyawan').val(nama);
          $('#keterangan').val(ket);
          $('#jenis_lembur').val(jenis_lembur);
          $('#kode_edit').val(1);
        });

      });
    </script>

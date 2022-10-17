
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
            <table id="myTable" class="table table-hover table-striped table-sm">
                <thead>
                    <tr style="color:black">
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Karyawan</th>
                        <th>Departemen</th>
                        <th>Group</th>
                        <th>Aksi</th>
                     </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($data->result() as $d) { ?>
                    <tr style="color:black">
                        <td width="30px"><?php echo $no++; ?></td>
                        <td><?php echo $d->nik; ?></td>
                        <td><?php echo $d->nama_karyawan; ?></td>
                        <td><?php echo $d->departemen; ?></td>
                        <td><?php echo $d->group; ?></td>
                        <td align="right" width="50px">
                            <a href="#" data-nik="<?php echo $d->nik; ?>" data-nama="<?php echo $d->nama_karyawan; ?>" data-dept="<?php echo $d->departemen; ?>" class="btn btn-sm btn-success pilih">Pilih</a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function() {

    $('#myTable').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        "ordering": false
    });
    

    $('#myTable tbody').on('click', '.pilih', function () {
        
        var nik       = $(this).attr('data-nik');
        var nama      = $(this).attr('data-nama');
        var dept      = $(this).attr('data-dept');
        
        $('#nik').val(nik);
        $('#nama_karyawan').val(nama);
        $('#departemen').val(dept);
        $("#dataKaryawan").modal('hide');
    });

});
</script>
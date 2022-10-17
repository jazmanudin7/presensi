<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>Departemen/inputDepartemen" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">DATA DEPARTEMEN</h5>
        <div class="table-responsive">
          <table id="myTable" class="table table-hover table-striped table-sm">
            <thead>
              <tr style="color:black;zoom:110%">
                <th>No</th>
                <th>Departemen</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data->result() as $d) { ?>
                <tr>
                  <td width="30px"><?php echo $no++; ?></td>
                  <td width="50px"><?php echo $d->nama_dept; ?></td>
                  <td align="right" width="100px">
                    <a href="#" data-href="<?php echo base_url(); ?>Departemen/hapusDepartemen/<?php echo $d->kode_dept; ?>" class="delete btn btn-sm btn-danger"><i class="ri-delete-bin-6-line"></i></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>Departemen/inputDepartemen" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">DATA GROUP</h5>
        <div class="table-responsive">
          <table id="myTables" class="table table-hover table-striped table-sm">
            <thead>
              <tr style="color:black;zoom:110%">
                <th>No</th>
                <th>Group</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($datas->result() as $d) { ?>
                <tr>
                  <td width="30px"><?php echo $no++; ?></td>
                  <td width="50px"><?php echo $d->nama_group; ?></td>
                  <td align="right" width="100px">
                    <a href="#" data-href="<?php echo base_url(); ?>Departemen/hapusGroup/<?php echo $d->kode_group; ?>" class="deletes btn btn-sm btn-danger"><i class="ri-delete-bin-6-line"></i></a>
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

    $('#myTable').DataTable();
    $('#myTables').DataTable();

    $("#myTable").on("click", ".delete", function(e) {
      e.preventDefault();
      var getLink = $(this).attr('data-href');
      Swal.fire({
        title: 'Yakin Mau di Hapus??',
        text: "Data tidak akan kembali lagi..",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.dismiss) {
          Swal.fire(
            'Batal',
            'Batal di Hapus, Data Masih Aman',
            'error'
          )
        } else {
          Swal.fire(
            'Hapus',
            'Berhasil di Hapus',
            'success'
          )
          window.location.href = getLink
        }
      })
    });

    $("#myTables").on("click", ".deletes", function(e) {
      e.preventDefault();
      var getLink = $(this).attr('data-href');
      Swal.fire({
        title: 'Yakin Mau di Hapus??',
        text: "Data tidak akan kembali lagi..",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.dismiss) {
          Swal.fire(
            'Batal',
            'Batal di Hapus, Data Masih Aman',
            'error'
          )
        } else {
          Swal.fire(
            'Hapus',
            'Berhasil di Hapus',
            'success'
          )
          window.location.href = getLink
        }
      })
    });
  });
</script>
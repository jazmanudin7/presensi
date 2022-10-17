<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>Gaji/inputGaji" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">Data Gaji</h5>
        <div class="table-responsive">
          <table id="myTable" class="table table-hover table-striped table-sm">
            <thead>
              <tr style="color:black">
                <th>Kode</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody style="zoom:100%">
              <?php
              $no = 1;
              foreach ($data->result() as $d) {

              ?>
                <tr>
                  <td><?php echo $d->nobukti; ?></td>
                  <td><?php echo $d->bulan; ?></td>
                  <td><?php echo $d->tahun; ?></td>
                  <td align="right" width="100px">
                    <a href="<?php echo base_url(); ?>Gaji/editGaji/<?php echo $d->nobukti; ?>" class="btn btn-sm btn-warning"><i class="ri-pencil-fill"></i></a>
                    <a href="#" data-href="<?php echo base_url(); ?>Gaji/hapusGaji/<?php echo $d->nobukti; ?>" class="delete btn btn-sm btn-danger"><i class="ri-delete-bin-6-line"></i></a>
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
  });
</script>
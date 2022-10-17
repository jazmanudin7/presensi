<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>Absensi/inputAbsensi" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">Data Absensi</h5>
        <div class="table-responsive">
          <table id="myTable" class="table table-hover table-striped table-sm">
            <thead>
              <tr style="color:black">
                <th>No</th>
                <th>Tanggal</th>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
                <th>Shift</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data->result() as $d) { ?>
                <tr>
                  <td width="20px"><?php echo $no++; ?></td>
                  <td><?php echo dateToIndo($d->tanggal); ?></td>
                  <td><?php echo $d->nik; ?></td>
                  <td><?php echo $d->nama_karyawan; ?></td>
                  <td><?php echo $d->masuk; ?></td>
                  <td><?php echo $d->pulang; ?></td>
                  <td><?php echo $d->shift; ?></td>
                  <td align="right" width="100px">
                    <a href="<?php echo base_url(); ?>Absensi/editAbsensi/<?php echo $d->kode_absensi; ?>" class="btn btn-sm btn-warning"><i class="ri-pencil-fill"></i></a>
                    <a href="#" data-href="<?php echo base_url(); ?>Absensi/hapusAbsensi/<?php echo $d->kode_absensi; ?>" class="delete btn btn-sm btn-danger"><i class="ri-delete-bin-6-line"></i></a>
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
        title: 'Yakin Mau di Hapus..??',
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
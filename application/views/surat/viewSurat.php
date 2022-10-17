<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>surat/inputSurat" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">Data Surat</h5>
        <div class="table-responsive">
          <table id="myTable" class="table table-hover table-striped table-sm">
            <thead>
              <tr style="color:black">
                <th>No</th>
                <th>Tanggal</th>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Jenis Absen</th>
                <th>Head Dept</th>
                <th>HRD</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data->result() as $d) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><a href="<?php echo base_url(); ?>Surat/detailSurat/<?php echo $d->kode_surat; ?>"><?php echo dateToIndo($d->tanggal); ?></a></td>
                  <td><?php echo $d->nik; ?></td>
                  <td><?php echo $d->nama_karyawan; ?></td>
                  <td><?php echo $d->departemen; ?></td>
                  <td><?php echo $d->jenis_izin; ?></td>
                  <td><?php echo $d->head_dept; ?></td>
                  <td><?php echo $d->hrd; ?></td>
                  <td align="right" width="120px">
                    <a href="<?php echo base_url(); ?>Surat/editSurat/<?php echo $d->kode_surat; ?>" class="btn btn-sm btn-warning"><i class="ri-pencil-fill"></i></a>
                    <a href="#" data-href="<?php echo base_url(); ?>Surat/hapusSurat/<?php echo $d->kode_surat; ?>" class="delete btn btn-sm btn-danger"><i class="ri-delete-bin-6-line"></i></a>
                    <a href="<?php echo base_url(); ?>Surat/detailSurat/<?php echo $d->kode_surat; ?>" class="btn btn-sm btn-primary"><i class="ri-eye-line"></i></a></a>
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
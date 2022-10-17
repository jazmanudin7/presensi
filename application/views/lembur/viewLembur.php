<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>Lembur/inputLembur" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">Data Lembur</h5>
        <div class="table-responsive">
          <table id="myTable" class="table table-hover table-striped table-sm">
            <thead>
              <tr style="color:black">
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Group</th>
                <th>Kantor</th>
                <th>Dari</th>
                <th>Sampai</th>
                <th>Keperluan</th>
                <th>Keterangan</th>
                <th>Jenis Lembur</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody style="zoom:100%">
              <?php 
              $no = 1;
              foreach ($data->result() as $d) { ?>
                <tr>
                  <td width="30px"><?php echo $no++; ?></td>
                  <td><?php echo dateToIndo($d->tanggal); ?></td>
                  <td><?php echo $d->nama_karyawan; ?></td>
                  <td><?php echo $d->departemen; ?></td>
                  <td><?php echo $d->group; ?></td>
                  <td><?php echo $d->kantor; ?></td>
                  <td><?php echo $d->dari; ?></td>
                  <td><?php echo $d->sampai; ?></td>
                  <td><?php echo $d->keperluan; ?></td>
                  <td><?php echo $d->keterangan; ?></td>
                  <td><?php echo $d->jenis_lembur; ?></td>
                  <td align="right" width="100px">
                    <a href="<?php echo base_url(); ?>Lembur/editLembur/<?php echo $d->kode_lembur; ?>" class="btn btn-sm btn-warning"><i class="ri-pencil-fill"></i></a>
                    <a href="#" data-href="<?php echo base_url(); ?>Lembur/hapusLembur/<?php echo $d->kode_lembur; ?>" class="delete btn btn-sm btn-danger"><i class="ri-delete-bin-6-line"></i></a>
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


    $("#myTable").on("click", ".delete", function(e){
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
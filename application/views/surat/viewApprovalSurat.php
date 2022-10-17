<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url(); ?>surat/inputSurat" class="btn btn-xs btn-primary">Tambah Data</a>
        <h5 class="card-title" align="center">Approval Surat Absent</h5>
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
              foreach ($data->result() as $d) { 
              
              $nik      = $this->session->userdata('nik');
              ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><a href="<?php echo base_url(); ?>Surat/detailSurat/<?php echo $d->kode_surat; ?>"><?php echo dateToIndo($d->tanggal); ?></a></td>
                    <td><?php echo $d->nik; ?></td>
                    <td><?php echo $d->nama_karyawan; ?></td>
                    <td><?php echo $d->departemen; ?></td>
                    <td><?php echo $d->jenis_izin; ?></td>
                    <td>
                        <?php if($d->head_dept == 'Diterima'){ ?>
                            <a href="#" class="btn btn-sm btn-success"><i class="ri-check-double-line"></i></a>
                        <?php }else if($d->head_dept == 'Ditolak'){ ?>
                            <a href="#" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                        <?php }else{ ?>
                            <a href="#" class="btn btn-sm btn-warning"><i class="ri-time-line"></i></a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if($d->hrd == 'Diterima'){ ?>
                            <a href="#" class="btn btn-sm btn-success"><i class="ri-check-double-line"></i></a>
                        <?php }else if($d->hrd == 'Ditolak'){ ?>
                            <a href="#" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                        <?php }else{ ?>
                            <a href="#" class="btn btn-sm btn-warning"><i class="ri-time-line"></i></a>
                        <?php } ?>
                    </td>
                   
                    <td align="right" width="120px">
                        <?php if($d->approval == $this->session->userdata('departemen') ){ ?>
                            <?php if($d->head_dept == ''){ ?>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Diterima/HeadDept" class="btn btn-sm btn-success"><i class="ri-check-double-line"></i></a>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Ditolak/HeadDept" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                            <?php }else if($d->hrd == ''){ ?>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Batal/HeadDept" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                            <?php } ?>
                        <?php }else if($nik == '14.06.035'){ ?>
                            <?php if($d->head_dept == 'Diterima' AND $d->hrd == ''){ ?>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Diterima/HRD" class="btn btn-sm btn-success"><i class="ri-check-double-line"></i></a>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Ditolak/HRD" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                            <?php }else if($d->hrd == 'Diterima' OR $d->hrd == 'Ditolak'){ ?>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Batal/HRD" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                            <?php } ?>
                        <?php }else if($nik == '21.12.12'){ ?>
                            <?php if($d->security == '' AND $d->hrd == 'Diterima'){ ?>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Diterima/Security" class="btn btn-sm btn-success"><i class="ri-check-double-line"></i></a>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Ditolak/Security" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                            <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>Surat/acceptSurat/<?php echo $d->kode_surat; ?>/Batal/Security" class="btn btn-sm btn-danger"><i class="ri-close-line"></i></a>
                            <?php } ?>
                        <?php } ?>
                        <a href="<?php echo base_url(); ?>Surat/detailSurat/<?php echo $d->kode_surat; ?>" class="btn btn-sm btn-primary"><i class="ri-eye-fill"></i></a>
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
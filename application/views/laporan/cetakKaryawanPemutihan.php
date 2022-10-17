<?php
?>
<style>
    @page {
        size: A4
    }

    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th {
        padding: 8px 8px;
        border: 1px solid #000000;
        text-align: center;
    }

    .table td {
        padding: 3px 3px;
        border: 1px solid #000000;
    }

    .text-center {
        text-align: center;
    }

    .table-hover tbody tr:hover td,
    .table-hover tbody tr:hover th {
        background-color: red;
    }
</style>
<title>DATA HISTORI PEMUTIHAN KARYAWAN</title>
<div style="font-family: calibri;width:100%">
    <div class="card">
        <div class="card-body" style="zoom:100%">
            <div class="col-lg-12">
                <h1 style="text-align: center; font-weight: bold;">
                    DATA HISTORI PEMUTIHAN KARYAWAN<br>
                </h1>
            </div>
            <?php
            $no = 1;
            ?>
            <div class="col-lg-12">
                <table class="table table-hover table-striped table-sm table-bordered">
                    <thead>
                        <tr style="color:black;background-color:skyblue;text-align:left">
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Karyawan</th>
                            <th>Group</th>
                            <th>Tgl Masuk</th>
                            <th>Masa Jabatan</th>
                            <th>Departemen</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                            $tglkontrak     = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ORDER BY kode_kontrak DESC")->row_array();
                            $pemutihan      = $this->db->query("SELECT * FROM pemutihan WHERE nik = '$d->nik' ")->result();
                            $jmlhpemutihan  = $this->db->query("SELECT * FROM pemutihan WHERE nik = '$d->nik' ")->num_rows();

                            if (isset($tglkontrak['akhir_kontrak'])) {
                                $akhir_kontrak  = $tglkontrak['akhir_kontrak'];
                                $dateKontrak    = new DateTime($akhir_kontrak);

                                $now            = new DateTime();
                                $sisakontrak    = $dateKontrak->diff($now)->format("%m");
                                $kontraksisa    = $dateKontrak->diff($now)->format("%y Tahun %m Bulan %d Hari");
                                if ($sisakontrak <= 1) {
                                    $bgcolor        = "#850909";
                                } else {
                                    $bgcolor        = "";
                                }
                            } else {
                                $sisakontrak        = "";
                                $kontraksisa        = "";
                                $bgcolor            = "";
                            }


                            $tgl_masuk      = $d->tgl_masuk;
                            $dateMasuk      = new DateTime($tgl_masuk);

                            $now            = new DateTime();
                            $masaKerja      = $dateMasuk->diff($now)->format("%y Tahun %m Bulan %d Hari");

                        ?>
                            <tr>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php echo $no++ ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php echo $d->nik; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php echo $d->nama_karyawan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php echo $d->group; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php if ($d->tgl_masuk != '0000-00-00') {
                                                                                                                        echo DateToIndo($d->tgl_masuk);
                                                                                                                    } ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php echo $masaKerja; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhpemutihan + 1; ?>"><?php echo $d->departemen; ?></td>
                                <?php
                                $no = 1;
                                foreach ($pemutihan as $s) {
                                ?>
                            <tr>
                                <td bgcolor="#2196f3"><?php echo DateToIndo($s->tanggal); ?></td>
                                <td align="right" bgcolor="#2196f3"><?php echo number_format($s->nominal); ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo "Pemutihan Ke-" . $no++; ?></td>
                            </tr>
                        <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
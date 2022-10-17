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
<title>DATA HISTORI KONTRAK KARYAWAN</title>
<div style="font-family: calibri;width:100%">
    <div class="card">
        <div class="card-body" style="zoom:100%">
            <div class="col-lg-12">
                <h1 style="text-align: center; font-weight: bold;">
                    DATA HISTORI KONTRAK KARYAWAN<br>
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
                            <th>Sisa Kontrak</th>
                            <th>Kontrak Ke</th>
                            <th>Awal Kontrak</th>
                            <th>Akhir Kontrak</th>
                            <th>Jenis Kontrak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                            $tglkontrak     = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ORDER BY kode_kontrak DESC")->row_array();
                            $kontrak        = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ")->result();
                            $jmlhkontrak    = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ")->num_rows();

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
                            $tgl_lahir      = $d->tgl_lahir;
                            $dateLahir      = new DateTime($tgl_lahir);

                            $now            = new DateTime();
                            $masaKerja      = $dateMasuk->diff($now)->format("%y Tahun %m Bulan %d Hari");
                            $umur           = $dateLahir->diff($now)->format("%y Tahun %m Bulan %d Hari");

                        ?>
                            <tr>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $no++ ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $d->nik; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $d->nama_karyawan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $d->group; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php if (isset($d->tgl_masuk)) {
                                                                                                                    echo DateToIndo($d->tgl_masuk);
                                                                                                                } ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $masaKerja; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $d->departemen; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>" rowspan="<?php echo $jmlhkontrak + 1; ?>"><?php echo $kontraksisa; ?></td>
                                <?php
                                $nos = 1;
                                foreach ($kontrak as $k) {
                                    if ($k->jenis_kontrak == 'KARTAP') {
                                        $bgcolor = "#008f73";
                                    } else if ($k->jenis_kontrak == 'JEDA') {
                                        $bgcolor = "#ffbc07";
                                    } else {
                                        $bgcolor = "";
                                    }
                                ?>
                            <tr>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo "Kontrak Ke-" . $nos++; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo DateToIndo($k->awal_kontrak); ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo DateToIndo($k->akhir_kontrak); ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $k->jenis_kontrak; ?></td>

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
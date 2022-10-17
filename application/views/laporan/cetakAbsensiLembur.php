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
<title>Laporan Absensi Karyawan</title>
<div style="font-family: calibri;width:180%">
    <div class="card">
        <div class="card-body" style="zoom:85%">
            <div class="col-lg-12">
                <h5 class="card-title" style="text-align: center; font-weight: bold;">
                    DAFTAR LEMBUR KARYAWAN <br>
                </h5>
            </div>
            <?php
            $settings   = $this->db->query("SELECT * FROM setting WHERE bulan = '$bulan' AND tahun = '$tahun' ")->row_array();
            $dari       = $settings['dari'];
            $sampai     = $settings['sampai'];
            $jumlahHari = $settings['jumlahHari'];
            $jumlahJam  = $settings['jumlahJam'];
            ?>
            <div class="col-lg-12">
                <table class="table table-hover table-striped table-sm table-bordered">
                    <thead>
                        <tr style="color:black">
                            <th style="background-color:skyblue;width:2%;text-align:center" rowspan="2">No</th>
                            <th colspan="2" style="background-color:skyblue;text-align:center">Data Karyawan</th>
                            <th colspan="<?php echo $jumlahHari; ?>" style="background-color:skyblue;text-align:center"><?php echo date("F", mktime(0, 0, 0, $bulan, 10)); ?> <?php echo $tahun; ?></th>
                            <th colspan="2" style="background-color:skyblue;text-align:center;width:5%">Over Time</th>
                            <th rowspan="2" style="background-color:skyblue;text-align:center;width:5%">Lembur Hari Libur</th>
                        </tr>
                        <tr style="color:black;background-color:skyblue;text-align:center">
                            <th style="width:10%">Nama Karyawan</th>
                            <th style="width:5%">NIK</th>
                            <?php
                            while (strtotime($dari) <= strtotime($sampai)) {

                                if (date('l', strtotime($dari)) == 'Sunday') {
                                    $colorDari      = 'red';
                                    $jamDari        = 0;
                                    $tanggal        = explode("-", $dari)[2];
                                } else if (date('l', strtotime($dari)) == 'Saturday') {
                                    $colorDari      = 'orange';
                                    $jamDari        = 5;
                                    $tanggal        = explode("-", $dari)[2];
                                } else {
                                    $colorDari      = '';
                                    $jamDari        = 7;
                                    $tanggal        = explode("-", $dari)[2];
                                }
                            ?>
                                <th bgcolor="<?php echo $colorDari; ?>" style="width:2%"><?php echo $tanggal; ?></th>
                            <?php
                                $dari = date("Y-m-d", strtotime("+1 day", strtotime($dari)));
                            }
                            ?>
                            <th style="width:3%">1</th>
                            <th style="width:3%">2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no     = 1;
                        $total  = 0;
                        foreach ($data as $d) {
                        ?>
                            <tr style="color:black">
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td><?php echo ucfirst($d->nama_karyawan); ?></td>
                                <td><?php echo $d->nik; ?></td>

                                <?php
                                $settings   = $this->db->query("SELECT * FROM setting WHERE bulan = '$bulan' AND tahun = '$tahun' ")->row_array();
                                $dari       = $settings['dari'];
                                $sampai     = $settings['sampai'];
                                $jumlahHari = $settings['jumlahHari'];
                                $jumlahJam  = $settings['jumlahJam'];

                                $total              = 0;
                                $totallemburot      = 0;
                                $totallemburhl      = 0;
                                while (strtotime($dari) <= strtotime($sampai)) {

                                    $lembur = $this->db->query("SELECT 
                                    MAX(IF (tanggal = '$dari' , tanggal , '')) AS tanggal,
                                    MAX(IF (tanggal = '$dari' , jenis_lembur , '')) AS jenis_lembur,
                                    MAX(IF (tanggal = '$dari' , dari , '')) AS dari,
                                    MAX(IF (tanggal = '$dari' , sampai , '')) AS sampai
                                    FROM detail_lembur 
                                    INNER JOIN lembur ON lembur.kode_lembur = detail_lembur.kode_lembur
                                    WHERE detail_lembur.nik = '$d->nik' 
                                    ")->row_array();


                                    $awalLembur       = strtotime($dari . " " . $lembur['dari']);
                                    $akhirLembur      = strtotime($dari . " " . $lembur['sampai']);
                                    $diffLembur       = $akhirLembur - $awalLembur;
                                    $jamlembur        = floor($diffLembur / (60 * 60));
                                    $menitLembur      = $diffLembur - (floor($jamlembur) * (60 * 60));
                                    $hasilLembur      = floor($menitLembur / 60);

                                    $jmllembur       = $jamlembur . "." . $hasilLembur;


                                ?>
                                    <td>
                                        <?php
                                        if ($lembur['tanggal'] != '') {
                                            echo $jamlembur . "." . $hasilLembur;
                                        }
                                        ?>
                                    </td>
                                <?php

                                    if ($lembur['tanggal'] != '') {
                                        if ($lembur['jenis_lembur'] == 'OT') {
                                            $totallemburot    = $totallemburot + $jmllembur;
                                        } else {
                                            $totallemburhl    = $totallemburhl + $jmllembur;
                                        }
                                    }
                                    $dari = date("Y-m-d", strtotime("+1 day", strtotime($dari)));
                                }
                                ?>
                                <td align="center">
                                    <?php
                                    if ($totallemburot != '') {
                                        if ($totallemburot > 1) {
                                            echo "1 Jam";
                                        } else {
                                            echo $totallemburot . " Jam";
                                        }
                                    }
                                    ?>
                                </td>
                                <td align="center">
                                    <?php
                                    if ($totallemburot != '') {
                                        if ($totallemburot >= 1) {
                                            $lemburot2 = $totallemburot - 1;
                                            echo $lemburot2 . " Jam";
                                        } else {
                                            $lemburot2 = 0;
                                        }
                                    }
                                    ?>
                                </td>
                                <td align="center">
                                    <?php
                                    if ($totallemburhl != '') {
                                        echo $totallemburhl . " Jam";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
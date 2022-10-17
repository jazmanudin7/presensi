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
<?php
if ($bulan == '1') {
    $bulans  = 'JANUARI';
} else if ($bulan == '2') {
    $bulans  = 'FEBRUARI';
} else if ($bulan == '3') {
    $bulans  = 'MARET';
} else if ($bulan == '4') {
    $bulans  = 'APRIL';
} else if ($bulan == '5') {
    $bulans  = 'MEI';
} else if ($bulan == '6') {
    $bulans  = 'JUNI';
} else if ($bulan == '7') {
    $bulans  = 'JULI';
} else if ($bulan == '8') {
    $bulans  = 'AGUSTUS';
} else if ($bulan == '9') {
    $bulans  = 'SEPTEMBER';
} else if ($bulan == '10') {
    $bulans  = 'OKTOBER';
} else if ($bulan == '11') {
    $bulans  = 'NOVEMBER';
} else if ($bulan == '12') {
    $bulans  = 'DESEMBER';
}
?>
<title>Laporan Absensi</title>
<div style="font-family: calibri;width:120%">
    <div class="card">
        <div class="card-body" style="zoom:80%">
            <div class="col-lg-12">
                <h5 class="card-title" style="text-align: center; font-weight: bold;;font-size:20px">
                    DAFTAR HADIR KARYAWAN <br>
                    PERIODE BULAN <?php echo $bulans . " " . $tahun; ?>
                </h5>
            </div>
            <?php
            function tgl_indo($tanggal)
            {
                $bulan = array(
                    1 =>
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
                $pecahkan = explode('-', $tanggal);

                return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
            }
            $settings           = $this->db->query("SELECT * FROM setting WHERE bulan = '$bulan' AND tahun = '$tahun' ")->row_array();
            $jumHari            = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
            $dari               = $tahun . "-" . $bulan . "-01";
            $sampai             = $tahun . "-" . $bulan . "-" . $jumHari;
            $darilembur         = $settings['dari'];
            $sampailembur       = $settings['sampai'];
            $jumlahHari         = $settings['jumlahHari'];
            $jumlahJam          = $settings['jumlahJam'];
            $jumlahAbsen        = 0;
            ?>
            <div class="col-lg-12">
                <table class="table table-hover table-striped table-sm table-bordered">
                    <thead>
                        <tr style="color:black">
                            <th style="background-color:skyblue;width:0.5%;text-align:center" rowspan="2">No</th>
                            <th colspan="2" style="background-color:skyblue;text-align:center">Data Karyawan</th>
                            <th colspan="<?php echo $jumHari; ?>" style="background-color:skyblue;text-align:center">Absensi Karyawan</th>
                            <th rowspan="2" style="background-color:skyblue;text-align:center;width:2%">Jumlah 173 Jam</th>
                            <th rowspan="2" style="background-color:red;text-align:center;width:2%">Jumlah Absen</th>
                        </tr>
                        <tr style="color:black;background-color:skyblue;text-align:center">
                            <th style="width:4%">Nama Karyawan</th>
                            <th style="width:1%">NIK</th>
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
                                <th bgcolor="<?php echo $colorDari; ?>" style="width:0.5%"><?php echo $tanggal; ?></th>
                            <?php
                                $dari = date("Y-m-d", strtotime("+1 day", strtotime($dari)));
                            }
                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no     = 1;
                        foreach ($data as $d) {
                        ?>
                            <tr style="color:black">
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td><?php echo ucfirst($d->nama_karyawan); ?></td>
                                <td><?php echo $d->nik; ?></td>

                                <?php
                                $settings   = $this->db->query("SELECT * FROM setting WHERE bulan = '$bulan' AND tahun = '$tahun' ")->row_array();
                                $jumHari            = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
                                $dari               = $tahun . "-" . $bulan . "-01";
                                $sampai             = $tahun . "-" . $bulan . "-" . $jumHari;
                                $premi2     = $settings['premi2'];
                                $premi3     = $settings['premi3'];

                                $totalJamKerja      = 0;
                                $totalAbsen         = 0;
                                $totalpremi2        = 0;
                                $totalpremi3        = 0;
                                while (strtotime($dari) <= strtotime($sampai)) {
                                    $surat = $this->db->query("SELECT 
                                    MAX(IF (tanggal = '$dari' , tanggal , '')) AS tanggal,
                                    MAX(IF (tanggal = '$dari' , masuk , '')) AS masuk,
                                    MAX(IF (tanggal = '$dari' , masuk , '')) AS masuk,
                                    MAX(IF (tanggal = '$dari' , keterangan , '')) AS keterangan,
                                    MAX(IF (tanggal = '$dari' , keluar , '')) AS keluar,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiBulanIni,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '1' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiJanuari,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '2' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiFebruari,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '3' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiMaret,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '4' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiApril,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '5' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiMei,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '6' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiJuni,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '7' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiJuli,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '8' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiAgustus,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '9' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiSeptember,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '10' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiOktober,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '11' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiNovember,
                                    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '12' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cutiDesember
                                    
                                    FROM surat_izin WHERE surat_izin.nik = '$d->nik' AND surat_izin.hrd = 'Diterima'
                                    ")->row_array();


                                    $awalSurat       = strtotime($dari . " " . $surat['keluar']);
                                    $akhirSurat      = strtotime($dari . " " . $surat['masuk']);
                                    $diffSurat       = $akhirSurat - $awalSurat;
                                    $jamIzin         = floor($diffSurat / (60 * 60));
                                    $menitSurat      = $diffSurat - (floor($jamIzin) * (60 * 60));
                                    $hasilSurat      = floor($menitSurat / 60);


                                    $absen = $this->db->query("SELECT 
                                    karyawan.nama_karyawan,
                                    karyawan.nik,
                                    MAX(IF (tanggal = '$dari' , keterangan , '')) AS keterangan,
                                    MAX(IF (tanggal = '$dari' , shift , '')) AS shift,
                                    MAX(IF (tanggal = '$dari' , masuk , '')) AS masuk,
                                    MAX(IF (tanggal = '$dari' , tanggal , '')) AS tanggal,
                                    MAX(IF (tanggal = '$dari' , pulang , '')) AS pulang
                                    FROM karyawan
                                    LEFT JOIN absensi ON absensi.nik = karyawan.nik WHERE absensi.nik = '$d->nik'
                                    ")->row_array();


                                    if ($absen['tanggal'] != '') {
                                        if ($absen['shift'] == 'Non Shift') {
                                            if (date('l', strtotime($dari)) == 'Saturday') {
                                                $masuk      = '07';
                                                $masuktelat = '08';
                                                $pulang     = '12';
                                                $shift      = 'P';
                                                $premi      = 0;
                                            } else {
                                                $masuk      = '08';
                                                $masuktelat = '09';
                                                $pulang     = '16';
                                                $shift      = 'P';
                                                $premi      = 0;
                                            }
                                        } else if ($absen['shift'] == 'Shift 1') {
                                            if (date('l', strtotime($dari)) == 'Saturday') {
                                                $masuk      = '07';
                                                $masuktelat = '08';
                                                $pulang     = '12';
                                                $shift      = 'P';
                                                $premi      = 0;
                                            } else {
                                                $masuk      = '07';
                                                $masuktelat = '08';
                                                $pulang     = '15';
                                                $masuktelat = '09';
                                                $shift      = 'P';
                                                $premi      = 0;
                                            }
                                        } else if ($absen['shift'] == 'Shift 2') {
                                            if (date('l', strtotime($dari)) == 'Saturday') {
                                                $masuk      = '12';
                                                $masuktelat = '13';
                                                $pulang     = '17';
                                                $shift      = 'S';
                                                $premi      = $premi2;
                                            } else {
                                                $masuk      = '15';
                                                $masuktelat = '16';
                                                $pulang     = '23';
                                                $shift      = 'S';
                                                $premi      = $premi2;
                                            }
                                        } else if ($absen['shift'] == 'Shift 3') {
                                            if (date('l', strtotime($dari)) == 'Saturday') {
                                                $masuk      = "17";
                                                $masuktelat = '13';
                                                $pulang     = '22';
                                                $shift      = 'M';
                                                $premi      = $premi3;
                                            } else {
                                                $masuk      = '23';
                                                $masuktelat = '00';
                                                $pulang     = '07';
                                                $shift      = 'M';
                                                $premi      = $premi3;
                                            }
                                        }

                                        if ($absen['masuk'] . substr(0, 2) <= $masuk) {
                                            $jm = $masuk . ':00:00';
                                        } else {
                                            if ($absen['masuk'] >= $masuktelat) {
                                                $jm     = $absen['masuk'];
                                            } else {
                                                $jm     = $masuk . ':00:00';
                                            }
                                        }

                                        if ($absen['pulang'] . substr(0, 2) >= $pulang) {
                                            $jp = $pulang . ':00:00';
                                        } else {
                                            $jp = $absen['pulang'];
                                        }

                                        if ($absen['shift'] == 'Shift 3') {
                                            if (date('l', strtotime($dari)) == 'Saturday') {
                                                $tanggalPulang = $dari;
                                            } else {
                                                $tanggalPulang = date('Y-m-d', strtotime('+1 days', strtotime($dari)));
                                            }
                                        } else {
                                            $tanggalPulang = $dari;
                                        }


                                        $awal       = strtotime($dari . " " . $jm);
                                        $akhir      = strtotime($tanggalPulang . " " . $jp);
                                        $diff       = $akhir - $awal;
                                        $jam        = floor($diff / (60 * 60));
                                        $menit      = $diff - (floor($jam) * (60 * 60));
                                        $hasil      = floor($menit / 60);
                                    }

                                ?>

                                    <td bgcolor="<?php
                                                    if ($absen['keterangan'] == 'A') {
                                                        echo "#ff0000";
                                                    } else {
                                                        if ($surat['keterangan'] != '') {
                                                            if ($surat['keterangan'] == 'Cuti') {
                                                                echo "#4caf50";
                                                            } else if ($surat['keterangan'] == 'SID') {
                                                                echo "#4caf50";
                                                            } else if ($surat['keterangan'] == 'Izin Khusus') {
                                                                echo "#ffc107";
                                                            } else if ($surat['keterangan'] == 'Cuti Lahiran') {
                                                                echo "#cddc39";
                                                            } else if ($surat['keterangan'] == 'Sakit') {
                                                                echo "#ff5722";
                                                            } else if ($surat['keterangan'] == 'Izin') {
                                                                echo "#607d8b";
                                                            }
                                                        }
                                                    }
                                                    ?>" align="center">
                                        <?php
                                        $total              = 0.0;
                                        if ($absen['keterangan'] == 'H') {
                                            if ($absen['pulang'] != '') {
                                                if (date('l', strtotime($dari)) == 'Saturday') {
                                                    if ($jamIzin != '') {
                                                        if ($jam == 5) {
                                                            echo $shift;
                                                            $total              = (($jam . "." . $hasil) - ($jamIzin . "." . $hasilSurat));
                                                            $jumlahAbsen        = 0.0;
                                                        } else {
                                                            echo $shift . "" . number_format((($jam . "." . $hasil) - ($jamIzin . "." . $hasilSurat)), 2);
                                                            $total              = (($jam . "." . $hasil) - ($jamIzin . "." . $hasilSurat));
                                                            $jumlahAbsen        = 7 - (($jam . "." . $hasil) - ($jamIzin . "." . $hasilSurat));
                                                        }
                                                    } else {
                                                        if ($jam == 5) {
                                                            echo $shift;
                                                            $total               = $jam . "." . $hasil;
                                                            $jumlahAbsen        = 0.0;
                                                        } else {
                                                            echo $shift . "" . number_format($jam . "." . $hasil, 2);
                                                            $total              = $jam . "." . $hasil;
                                                            $jumlahAbsen        = 7 - $jam . "." . $hasil;
                                                        }
                                                    }
                                                } else {
                                                    $jamNonSuturday    = $jam - 1;
                                                    if ($jamIzin != '') {
                                                        if ($jamNonSuturday == 7) {
                                                            echo $shift;
                                                            $total              = (($jamNonSuturday . "." . $hasil) - ($jamIzin . "." . $hasilSurat));
                                                            $jumlahAbsen        = 0.0;
                                                        } else {
                                                            echo $shift . "" . number_format((($jamNonSuturday . "." . $hasil) - ($jamIzin . "." . $hasilSurat)), 2);
                                                            $total              = (($jamNonSuturday . "." . $hasil) - ($jamIzin . "." . $hasilSurat));
                                                            $jumlahAbsen        = 7 - (($jamNonSuturday . "." . $hasil) - ($jamIzin . "." . $hasilSurat));
                                                        }
                                                    } else {
                                                        if ($jamNonSuturday == 7) {
                                                            echo $shift;
                                                            $total              = $jamNonSuturday . "." . $hasil;
                                                            $jumlahAbsen       = 0.0;
                                                        } else {
                                                            echo $shift . "" . $jamNonSuturday . "." . $hasil;
                                                            $total              = $jamNonSuturday . "." . $hasil;
                                                            $jumlahAbsen        = 7 - $jamNonSuturday . "." . $hasil;
                                                        }
                                                    }
                                                }
                                            }
                                        } else if ($absen['keterangan'] == 'A') {
                                            if (date('l', strtotime($dari)) == 'Saturday') {
                                                $jumlahAbsen        = 5.0;
                                                $total              = 0.0;
                                                echo 'A';
                                            } else {
                                                $total              = 0.0;
                                                $jumlahAbsen        = 7.0;
                                                echo 'A';
                                            }
                                        } else {
                                            $total              = 0.0;
                                            if ($surat['keterangan'] != '') {
                                                if ($surat['keterangan'] == 'SID' or $surat['keterangan'] == 'Cuti' or $surat['keterangan'] == 'Cuti Lahiran' or $surat['keterangan'] == 'Izin Khusus') {
                                                    if (date('l', strtotime($dari)) == 'Saturday') {
                                                        $total      = 5.0;
                                                        if ($surat['keterangan'] == 'Cuti') {
                                                            echo 'C';
                                                        } else if ($surat['keterangan'] == 'SID') {
                                                            echo 'SID';
                                                        } else if ($surat['keterangan'] == 'Izin Khusus') {
                                                            echo 'IK';
                                                        } else if ($surat['keterangan'] == 'Cuti Lahiran') {
                                                            echo 'CL';
                                                        }
                                                    } else {
                                                        $total      = 7.0;
                                                        if ($surat['keterangan'] == 'Cuti') {
                                                            echo 'C';
                                                        } else if ($surat['keterangan'] == 'SID') {
                                                            echo 'SID';
                                                        } else if ($surat['keterangan'] == 'Izin Khusus') {
                                                            echo 'IK';
                                                        } else if ($surat['keterangan'] == 'Cuti Lahiran') {
                                                            echo 'CL';
                                                        }
                                                    }
                                                } else {
                                                    if (date('l', strtotime($dari)) == 'Saturday') {
                                                        $jumlahAbsen        = 5.0;
                                                        $total              = 0.0;
                                                        if ($surat['keterangan'] == 'Sakit') {
                                                            echo 'SKT';
                                                        } else if ($surat['keterangan'] == 'Izin') {
                                                            echo 'I';
                                                        }
                                                    } else {
                                                        $jumlahAbsen        = 7.0;
                                                        $total              = 0.0;
                                                        if ($surat['keterangan'] == 'Sakit') {
                                                            echo 'SKT';
                                                        } else if ($surat['keterangan'] == 'Izin') {
                                                            echo 'I';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                <?php
                                    if ($absen['keterangan'] == 'H' or $surat['keterangan'] == 'SID' or $surat['keterangan'] == 'Cuti' or $surat['keterangan'] == 'Cuti Lahiran' or $surat['keterangan'] == 'Izin Khusus') {
                                        $totalJamKerja      = $totalJamKerja + $total;
                                    }

                                    if ($absen['keterangan'] == 'H' or $absen['keterangan'] == 'A' or $surat['keterangan'] == 'Sakit' or $surat['keterangan'] == 'Izin') {
                                        $totalAbsen         = $totalAbsen + $jumlahAbsen;
                                    }

                                    if (isset($absen['tanggal'])) {
                                        if ($total >= 5) {
                                            if ($absen['shift'] == 'Shift 2') {
                                                $totalpremi2      = $totalpremi2 + $premi;
                                            } else if ($absen['shift'] == 'Shift 3') {
                                                $totalpremi3      = $totalpremi3 + $premi;
                                            }
                                        }
                                    }
                                    $dari = date("Y-m-d", strtotime("+1 day", strtotime($dari)));
                                }
                                ?>
                                <td align="left">
                                    <?php
                                    echo $jumlahJam - $totalAbsen;
                                    ?>
                                </td>
                                <td align="left">
                                    <?php
                                    echo $totalAbsen;
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
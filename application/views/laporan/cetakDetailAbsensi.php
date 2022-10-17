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
<div style="font-family: calibri;width:300%">
    <div class="card">
        <div class="card-body" style="zoom:85%">
            <div class="col-lg-12">
                <h5 class="card-title" style="text-align: center; font-weight: bold;">
                    DETAIL ABSENSI KARYAWAN <br>
                </h5>
            </div>
            <?php

            if (date('l', strtotime($tahun . "-" . $bulan . "-1")) == 'Sunday') {
                $colorsatu      = 'red';
                $jmlhJamSatu    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-1")) == 'Saturday') {
                $colorsatu      = 'orange';
                $jmlhJamSatu    = 5;
            } else {
                $jmlhJamSatu    = 7;
                $colorsatu      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-2")) == 'Sunday') {
                $colordua      = 'red';
                $jmlhJamDua    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-2")) == 'Saturday') {
                $colordua      = 'orange';
                $jmlhJamDua    = 5;
            } else {
                $jmlhJamDua    = 7;
                $colordua      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-3")) == 'Sunday') {
                $colortiga     = 'red';
                $jmlhJamTiga    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-3")) == 'Saturday') {
                $colortiga     = 'orange';
                $jmlhJamTiga    = 5;
            } else {
                $jmlhJamTiga    = 7;
                $colortiga     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-4")) == 'Sunday') {
                $colorempat     = 'red';
                $jmlhJamEmpat    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-4")) == 'Saturday') {
                $colorempat     = 'orange';
                $jmlhJamEmpat    = 5;
            } else {
                $jmlhJamEmpat    = 7;
                $colorempat     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-5")) == 'Sunday') {
                $colorlima     = 'red';
                $jmlhJamLima    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-5")) == 'Saturday') {
                $colorlima     = 'orange';
                $jmlhJamLima    = 5;
            } else {
                $jmlhJamLima    = 7;
                $colorlima     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-6")) == 'Sunday') {
                $colorenam     = 'red';
                $jmlhJamEnam    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-6")) == 'Saturday') {
                $colorenam     = 'orange';
                $jmlhJamEnam    = 5;
            } else {
                $jmlhJamEnam    = 7;
                $colorenam     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-7")) == 'Sunday') {
                $colortujuh     = 'red';
                $jmlhJamTujuh    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-7")) == 'Saturday') {
                $colortujuh     = 'orange';
                $jmlhJamTujuh    = 5;
            } else {
                $jmlhJamTujuh    = 7;
                $colortujuh     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-8")) == 'Sunday') {
                $colordelapan     = 'red';
                $jmlhJamDelapan    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-8")) == 'Saturday') {
                $colordelapan     = 'orange';
                $jmlhJamDelapan    = 5;
            } else {
                $jmlhJamDelapan    = 7;
                $colordelapan     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-9")) == 'Sunday') {
                $colorsembilan     = 'red';
                $jmlhJamSembilan    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-9")) == 'Saturday') {
                $colorsembilan     = 'orange';
                $jmlhJamSembilan    = 5;
            } else {
                $jmlhJamSembilan    = 7;
                $colorsembilan     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-10")) == 'Sunday') {
                $colorsepuluh     = 'red';
                $jmlhJamSepuluh    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-10")) == 'Saturday') {
                $colorsepuluh     = 'orange';
                $jmlhJamSepuluh    = 5;
            } else {
                $jmlhJamSepuluh    = 7;
                $colorsepuluh     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-11")) == 'Sunday') {
                $colorsebelas     = 'red';
                $jmlhJamSebelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-11")) == 'Saturday') {
                $colorsebelas     = 'orange';
                $jmlhJamSebelas    = 5;
            } else {
                $jmlhJamSebelas    = 7;
                $colorsebelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-12")) == 'Sunday') {
                $colorduabelas     = 'red';
                $jmlhJamDuabelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-12")) == 'Saturday') {
                $colorduabelas     = 'orange';
                $jmlhJamDuabelas    = 5;
            } else {
                $jmlhJamDuabelas    = 7;
                $colorduabelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-13")) == 'Sunday') {
                $colortigabelas     = 'red';
                $jmlhJamTigabelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-13")) == 'Saturday') {
                $colortigabelas     = 'orange';
                $jmlhJamTigabelas    = 5;
            } else {
                $jmlhJamTigabelas    = 7;
                $colortigabelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-14")) == 'Sunday') {
                $colorempatbelas     = 'red';
                $jmlhJamEmpatbelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-14")) == 'Saturday') {
                $colorempatbelas     = 'orange';
                $jmlhJamEmpatbelas    = 5;
            } else {
                $jmlhJamEmpatbelas    = 7;
                $colorempatbelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-15")) == 'Sunday') {
                $colorlimabelas     = 'red';
                $jmlhJamLimabelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-15")) == 'Saturday') {
                $colorlimabelas     = 'orange';
                $jmlhJamLimabelas    = 5;
            } else {
                $jmlhJamLimabelas    = 7;
                $colorlimabelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-16")) == 'Sunday') {
                $colorenambelas     = 'red';
                $jmlhJamEnambelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-16")) == 'Saturday') {
                $colorenambelas     = 'orange';
                $jmlhJamEnambelas    = 5;
            } else {
                $jmlhJamEnambelas    = 7;
                $colorenambelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-17")) == 'Sunday') {
                $colortujuhbelas     = 'red';
                $jmlhJamTujuhbelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-17")) == 'Saturday') {
                $colortujuhbelas     = 'orange';
                $jmlhJamTujuhbelas    = 5;
            } else {
                $jmlhJamTujuhbelas    = 7;
                $colortujuhbelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-18")) == 'Sunday') {
                $colordelapanbelas     = 'red';
                $jmlhJamTujuhbelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-18")) == 'Saturday') {
                $colordelapanbelas     = 'orange';
                $jmlhJamTujuhbelas    = 5;
            } else {
                $jmlhJamTujuhbelas    = 7;
                $colordelapanbelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-19")) == 'Sunday') {
                $colorsembilanbelas     = 'red';
                $jmlhJamDelapanbelas    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-19")) == 'Saturday') {
                $colorsembilanbelas     = 'orange';
                $jmlhJamDelapanbelas    = 5;
            } else {
                $jmlhJamDelapanbelas    = 7;
                $colorsembilanbelas     = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-20")) == 'Sunday') {
                $colorduapuluh      = 'red';
                $jmlhJamDuapuluh    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-20")) == 'Saturday') {
                $colorduapuluh      = 'orange';
                $jmlhJamDuapuluh    = 5;
            } else {
                $jmlhJamDuapuluh    = 7;
                $colorduapuluh      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-21")) == 'Sunday') {
                $colorduasatu      = 'red';
                $jmlhJamDuasatu    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-21")) == 'Saturday') {
                $colorduasatu      = 'orange';
                $jmlhJamDuasatu    = 5;
            } else {
                $jmlhJamDuasatu    = 7;
                $colorduasatu      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-21")) == 'Sunday') {
                $colorduadua      = 'red';
                $jmlhJamDuadua    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-21")) == 'Saturday') {
                $colorduadua      = 'orange';
                $jmlhJamDuadua    = 5;
            } else {
                $jmlhJamDuadua    = 7;
                $colorduadua      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-22")) == 'Sunday') {
                $colorduadua      = 'red';
                $jmlhJamDuadua    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-22")) == 'Saturday') {
                $colorduadua      = 'orange';
                $jmlhJamDuadua    = 5;
            } else {
                $jmlhJamDuadua    = 7;
                $colorduadua      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-23")) == 'Sunday') {
                $colorduatiga      = 'red';
                $jmlhJamDuatiga    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-23")) == 'Saturday') {
                $colorduatiga      = 'orange';
                $jmlhJamDuatiga    = 5;
            } else {
                $jmlhJamDuatiga    = 7;
                $colorduatiga      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-24")) == 'Sunday') {
                $colorduaempat      = 'red';
                $jmlhJamDuaempat    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-24")) == 'Saturday') {
                $colorduaempat      = 'orange';
                $jmlhJamDuaempat    = 5;
            } else {
                $jmlhJamDuaempat    = 7;
                $colorduaempat      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-25")) == 'Sunday') {
                $colordualima      = 'red';
                $jmlhJamDualima    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-25")) == 'Saturday') {
                $colordualima      = 'orange';
                $jmlhJamDualima    = 5;
            } else {
                $jmlhJamDualima    = 7;
                $colordualima      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-26")) == 'Sunday') {
                $colorduaenam      = 'red';
                $jmlhJamDualima    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-26")) == 'Saturday') {
                $colorduaenam      = 'orange';
                $jmlhJamDualima    = 5;
            } else {
                $jmlhJamDualima    = 7;
                $colorduaenam      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-27")) == 'Sunday') {
                $colorduatujuh      = 'red';
                $jmlhJamDuatujuh    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-27")) == 'Saturday') {
                $colorduatujuh      = 'orange';
                $jmlhJamDuatujuh    = 5;
            } else {
                $jmlhJamDuatujuh    = 7;
                $colorduatujuh      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-28")) == 'Sunday') {
                $colorduadelapan      = 'red';
                $jmlhJamDuadelapan    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-28")) == 'Saturday') {
                $colorduadelapan      = 'orange';
                $jmlhJamDuadelapan    = 5;
            } else {
                $jmlhJamDuadelapan    = 7;
                $colorduadelapan      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-29")) == 'Sunday') {
                $colorduasembilan      = 'red';
                $jmlhJamDuasembilan    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-29")) == 'Saturday') {
                $colorduasembilan      = 'orange';
                $jmlhJamDuasembilan    = 5;
            } else {
                $jmlhJamDuasembilan    = 7;
                $colorduasembilan      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-30")) == 'Sunday') {
                $colortigapuluh      = 'red';
                $jmlhJamTigapuluh    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-30")) == 'Saturday') {
                $colortigapuluh      = 'orange';
                $jmlhJamTigapuluh    = 5;
            } else {
                $jmlhJamTigapuluh    = 7;
                $colortigapuluh      = '';
            }

            if (date('l', strtotime($tahun . "-" . $bulan . "-31")) == 'Sunday') {
                $colortigasatu      = 'red';
                $jmlhJamTigasatu    = 0;
            } else if (date('l', strtotime($tahun . "-" . $bulan . "-31")) == 'Saturday') {
                $colortigasatu      = 'orange';
                $jmlhJamTigasatu    = 5;
            } else {
                $jmlhJamTigasatu    = 7;
                $colortigasatu      = '';
            }

            $kalender       = CAL_GREGORIAN;
            $jumlahhariini  = cal_days_in_month($kalender, $bulan, $bulan);
            ?>
            <div class="col-lg-12">
                <table class="table table-hover table-striped table-sm table-bordered">
                    <thead>
                        <tr style="color:black">
                            <th style="background-color:skyblue;width:1%;text-align:center" rowspan="2">No</th>
                            <th colspan="2" style="background-color:skyblue;text-align:center">Data Karyawan</th>
                            <th colspan="<?php echo $jumlahhariini; ?>" style="background-color:skyblue;text-align:center"><?php echo date("F", mktime(0, 0, 0, $bulan, 10)); ?> <?php echo $tahun; ?></th>
                            <th colspan="5" style="background-color:skyblue;text-align:center;width:5%">Jumlah</th>
                        </tr>
                        <tr style="color:black;background-color:skyblue;text-align:center">
                            <th style="width:8%">Nama Karyawan</th>
                            <th style="width:3%">NIK</th>
                            <th bgcolor="<?php echo $colorsatu; ?>" style="width:2%">1</th>
                            <th bgcolor="<?php echo $colordua; ?>" style="width:2%">2</th>
                            <th bgcolor="<?php echo $colortiga; ?>" style="width:2%">3</th>
                            <th bgcolor="<?php echo $colorempat; ?>" style="width:2%">4</th>
                            <th bgcolor="<?php echo $colorlima; ?>" style="width:2%">5</th>
                            <th bgcolor="<?php echo $colorenam; ?>" style="width:2%">6</th>
                            <th bgcolor="<?php echo $colortujuh; ?>" style="width:2%">7</th>
                            <th bgcolor="<?php echo $colordelapan; ?>" style="width:2%">8</th>
                            <th bgcolor="<?php echo $colorsembilan; ?>" style="width:2%">9</th>
                            <th bgcolor="<?php echo $colorsepuluh; ?>" style="width:2%">10</th>
                            <th bgcolor="<?php echo $colorsebelas; ?>" style="width:2%">11</th>
                            <th bgcolor="<?php echo $colorduabelas; ?>" style="width:2%">12</th>
                            <th bgcolor="<?php echo $colortigabelas; ?>" style="width:2%">13</th>
                            <th bgcolor="<?php echo $colorempatbelas; ?>" style="width:2%">14</th>
                            <th bgcolor="<?php echo $colorlimabelas; ?>" style="width:2%">15</th>
                            <th bgcolor="<?php echo $colorenambelas; ?>" style="width:2%">16</th>
                            <th bgcolor="<?php echo $colortujuhbelas; ?>" style="width:2%">17</th>
                            <th bgcolor="<?php echo $colordelapanbelas; ?>" style="width:2%">18</th>
                            <th bgcolor="<?php echo $colorsembilanbelas; ?>" style="width:2%">19</th>
                            <th bgcolor="<?php echo $colorduapuluh; ?>" style="width:2%">20</th>
                            <th bgcolor="<?php echo $colorduasatu; ?>" style="width:2%">21</th>
                            <th bgcolor="<?php echo $colorduadua; ?>" style="width:2%">22</th>
                            <th bgcolor="<?php echo $colorduatiga; ?>" style="width:2%">23</th>
                            <th bgcolor="<?php echo $colorduaempat; ?>" style="width:2%">24</th>
                            <th bgcolor="<?php echo $colordualima; ?>" style="width:2%">25</th>
                            <th bgcolor="<?php echo $colorduaenam; ?>" style="width:2%">26</th>
                            <th bgcolor="<?php echo $colorduatujuh; ?>" style="width:2%">27</th>
                            <th bgcolor="<?php echo $colorduadelapan; ?>" style="width:2%">28</th>
                            <?php if ($jumlahhariini >= '29') { ?>
                                <th bgcolor="<?php echo $colorduasembilan; ?>" style="width:2%">29</th>
                            <?php } ?>
                            <?php if ($jumlahhariini >= '30') { ?>
                                <th bgcolor="<?php echo $colortigapuluh; ?>" style="width:2%">30</th>
                            <?php } ?>
                            <?php if ($jumlahhariini >= '31') { ?>
                                <th bgcolor="<?php echo $colortigasatu; ?>" style="width:2%">31</th>
                            <?php } ?>
                            <th bgcolor="<?php echo $colordualima; ?>" style="width:1%">Hadir</th>
                            <th bgcolor="<?php echo $colordualima; ?>" style="width:1%">Sakit</th>
                            <th bgcolor="<?php echo $colordualima; ?>" style="width:1%">Izin</th>
                            <th bgcolor="<?php echo $colordualima; ?>" style="width:1%">Cuti</th>
                            <th bgcolor="<?php echo $colordualima; ?>" style="width:1%">Alfa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                          
                        ?>
                            <tr style="color:black">
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td><?php echo ucfirst($d->nama_karyawan); ?></td>
                                <td><?php echo $d->nik; ?></td>
                                
                                <td align="center"><?php if($d->Satu == 'H'){ echo substr($d->jmSatu,0,5). " - " .substr($d->jpSatu,0,5); }else{ echo $d->Satu; } ?></td>
                                <td align="center"><?php if($d->Dua == 'H'){ echo substr($d->jmDua,0,5). " - " .substr($d->jpDua,0,5); }else{ echo $d->Dua; } ?></td>
                                <td align="center"><?php if($d->Tiga == 'H'){ echo substr($d->jmTiga,0,5). " - " .substr($d->jpTiga,0,5); }else{ echo $d->Tiga; } ?></td>
                                <td align="center"><?php if($d->Empat == 'H'){ echo substr($d->jmEmpat,0,5). " - " .substr($d->jpEmpat,0,5); }else{ echo $d->Empat; } ?></td>
                                <td align="center"><?php if($d->Lima == 'H'){ echo substr($d->jmLima,0,5). " - " .substr($d->jpLima,0,5); }else{ echo $d->Lima; } ?></td>
                                <td align="center"><?php if($d->Enam == 'H'){ echo substr($d->jmEnam,0,5). " - " .substr($d->jpEnam,0,5); }else{ echo $d->Enam; } ?></td>
                                <td align="center"><?php if($d->Tujuh == 'H'){ echo substr($d->jmTujuh,0,5). " - " .substr($d->jpTujuh,0,5); }else{ echo $d->Tujuh; } ?></td>
                                <td align="center"><?php if($d->Delapan == 'H'){ echo substr($d->jmDelapan,0,5). " - " .substr($d->jpDelapan,0,5); }else{ echo $d->Delapan; } ?></td>
                                <td align="center"><?php if($d->Sembilan == 'H'){ echo substr($d->jmSembilan,0,5). " - " .substr($d->jpSembilan,0,5); }else{ echo $d->Sembilan; } ?></td>
                                <td align="center"><?php if($d->Sepuluh == 'H'){ echo substr($d->jmSepuluh,0,5). " - " .substr($d->jpSepuluh,0,5); }else{ echo $d->Sepuluh; } ?></td>
                                <td align="center"><?php if($d->Sebelas == 'H'){ echo substr($d->jmSebelas,0,5). " - " .substr($d->jpSebelas,0,5); }else{ echo $d->Sebelas; } ?></td>
                                <td align="center"><?php if($d->Duabelas == 'H'){ echo substr($d->jmDuabelas,0,5). " - " .substr($d->jpDuabelas,0,5); }else{ echo $d->Duabelas; } ?></td>
                                <td align="center"><?php if($d->Tigabelas == 'H'){ echo substr($d->jmTigabelas,0,5). " - " .substr($d->jpTigabelas,0,5); }else{ echo $d->Tigabelas; } ?></td>
                                <td align="center"><?php if($d->Empatbelas == 'H'){ echo substr($d->jmEmpatbelas,0,5). " - " .substr($d->jpEmpatbelas,0,5); }else{ echo $d->Empatbelas; } ?></td>
                                <td align="center"><?php if($d->Limabelas == 'H'){ echo substr($d->jmLimabelas,0,5). " - " .substr($d->jpLimabelas,0,5); }else{ echo $d->Limabelas; } ?></td>
                                <td align="center"><?php if($d->Enambelas == 'H'){ echo substr($d->jmEnambelas,0,5). " - " .substr($d->jpEnambelas,0,5); }else{ echo $d->Enambelas; } ?></td>
                                <td align="center"><?php if($d->Tujuhbelas == 'H'){ echo substr($d->jmTujuhbelas,0,5). " - " .substr($d->jpTujuhbelas,0,5); }else{ echo $d->Tujuhbelas; } ?></td>
                                <td align="center"><?php if($d->Delapanbelas == 'H'){ echo substr($d->jmDelapanbelas,0,5). " - " .substr($d->jpDelapanbelas,0,5); }else{ echo $d->Delapanbelas; } ?></td>
                                <td align="center"><?php if($d->Sembilanbelas == 'H'){ echo substr($d->jmSembilanbelas,0,5). " - " .substr($d->jpSembilanbelas,0,5); }else{ echo $d->Sembilanbelas; } ?></td>
                                <td align="center"><?php if($d->Duapuluh == 'H'){ echo substr($d->jmDuapuluh,0,5). " - " .substr($d->jpDuapuluh,0,5); }else{ echo $d->Duapuluh; } ?></td>
                                <td align="center"><?php if($d->Duasatu == 'H'){ echo substr($d->jmDuasatu,0,5). " - " .substr($d->jpDuasatu,0,5); }else{ echo $d->Duasatu; } ?></td>
                                <td align="center"><?php if($d->Duadua == 'H'){ echo substr($d->jmDuadua,0,5). " - " .substr($d->jpDuadua,0,5); }else{ echo $d->Duadua; } ?></td>
                                <td align="center"><?php if($d->Duatiga == 'H'){ echo substr($d->jmDuatiga,0,5). " - " .substr($d->jpDuatiga,0,5); }else{ echo $d->Duatiga; } ?></td>
                                <td align="center"><?php if($d->Duaempat == 'H'){ echo substr($d->jmDuaempat,0,5). " - " .substr($d->jpDuaempat,0,5); }else{ echo $d->Duaempat; } ?></td>
                                <td align="center"><?php if($d->Dualima == 'H'){ echo substr($d->jmDualima,0,5). " - " .substr($d->jpDualima,0,5); }else{ echo $d->Dualima; } ?></td>
                                <td align="center"><?php if($d->Duaenam == 'H'){ echo substr($d->jmDuaenam,0,5). " - " .substr($d->jpDuaenam,0,5); }else{ echo $d->Duaenam; } ?></td>
                                <td align="center"><?php if($d->Duatujuh == 'H'){ echo substr($d->jmDuatujuh,0,5). " - " .substr($d->jpDuatujuh,0,5); }else{ echo $d->Duatujuh; } ?></td>
                                <td align="center"><?php if($d->Duadelapan == 'H'){ echo substr($d->jmDuadelapan,0,5). " - " .substr($d->jpDuadelapan,0,5); }else{ echo $d->Duadelapan; } ?></td>
                                
                                <?php if ($jumlahhariini >= '29') { ?>
                                    <td align="center"><?php if($d->Duasembilan == 'H'){ echo substr($d->jmDuasembilan,0,5). " - " .substr($d->jpDuasembilan,0,5); }else{ echo $d->Duasembilan; } ?></td>
                                <?php } ?>
                                <?php if ($jumlahhariini >= '30') { ?>
                                    <td align="center"><?php if($d->Tigapuluh == 'H'){ echo substr($d->jmTigapuluh,0,5). " - " .substr($d->jpTigapuluh,0,5); }else{ echo $d->Tigapuluh; } ?></td>
                                <?php } ?>
                                <?php if ($jumlahhariini >= '31') { ?>
                                    <td align="center"><?php if($d->Tigasatu == 'H'){ echo substr($d->jmTigasatu,0,5). " - " .substr($d->jpTigasatu,0,5); }else{ echo $d->Tigasatu; } ?></td>
                                <?php } ?>
                                <td align="center"><?php if($d->hadir != 0){ echo $d->hadir; } ?></td>
                                <td align="center"><?php if($d->sakit != 0){ echo $d->sakit; } ?></td>
                                <td align="center"><?php if($d->izin != 0){ echo $d->izin; } ?></td>
                                <td align="center"><?php if($d->cuti != 0){ echo $d->cuti; } ?></td>
                                <td align="center"><?php if($d->alfa != 0){ echo $d->alfa; } ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
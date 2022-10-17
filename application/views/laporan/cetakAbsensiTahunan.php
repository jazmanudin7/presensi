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
<div style="font-family: calibri;width:120%">
    <div class="card">
        <div class="card-body" style="zoom:90%">
            <div class="col-lg-12">
                <h1 style="text-align: center; font-weight: bold;">
                    DAFTAR HADIR KARYAWAN <br>
                    PERIODE TAHUN <?php echo $tahun; ?>
                </h1>
            </div>
            <div class="col-lg-12">
                <table class="table table-hover table-striped table-sm table-bordered">
                    <thead>
                        <tr style="color:black">
                            <th style="background-color:skyblue;width:1%;text-align:center" rowspan="2">No</th>
                            <th colspan="2" style="background-color:skyblue;text-align:center">Data Karyawan</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Januari</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Februari</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Maret</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">April</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Mei</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Juni</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Juli</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Agustus</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">September</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Oktober</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">November</th>
                            <th colspan="5" style="background-color:skyblue;width:3%;text-align:center">Desember</th>
                            <th colspan="5" style="background-color:skyblue;text-align:center;width:5%">Jumlah</th>
                        </tr>
                        <tr style="color:black;background-color:skyblue;text-align:center">
                            <th style="width:8%">Nama Karyawan</th>
                            <th style="width:3%">NIK</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
                            <th style="width:1%">H</th>
                            <th style="width:1%">S</th>
                            <th style="width:1%">I</th>
                            <th style="width:1%">C</th>
                            <th style="width:1%">A</th>
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
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->hadirJanuari != 0) {
                                                                            echo $d->hadirJanuari;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->sakitJanuari != 0) {
                                                                            echo $d->sakitJanuari;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->izinJanuari != 0) {
                                                                            echo $d->izinJanuari;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->cutiJanuari != 0) {
                                                                            echo $d->cutiJanuari;
                                                                        } ?></td>
                                <td align="center"><?php if ($d->alfaJanuari != 0) {
                                                        echo $d->alfaJanuari;
                                                    } ?></td>

                                <td align="center"><?php if ($d->hadirFebruari != 0) {
                                                        echo $d->hadirFebruari;
                                                    } ?></td>
                                <td align="center"><?php if ($d->sakitFebruari != 0) {
                                                        echo $d->sakitFebruari;
                                                    } ?></td>
                                <td align="center"><?php if ($d->izinFebruari != 0) {
                                                        echo $d->izinFebruari;
                                                    } ?></td>
                                <td align="center"><?php if ($d->cutiFebruari != 0) {
                                                        echo $d->cutiFebruari;
                                                    } ?></td>
                                <td align="center"><?php if ($d->alfaFebruari != 0) {
                                                        echo $d->alfaFebruari;
                                                    } ?></td>

                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->hadirMaret != 0) {
                                                                            echo $d->hadirMaret;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->sakitMaret != 0) {
                                                                            echo $d->sakitMaret;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->izinMaret != 0) {
                                                                            echo $d->izinMaret;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->cutiMaret != 0) {
                                                                            echo $d->cutiMaret;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->alfaMaret != 0) {
                                                                            echo $d->alfaMaret;
                                                                        } ?></td>

                                <td align="center"><?php if ($d->hadirApril != 0) {
                                                        echo $d->hadirApril;
                                                    } ?></td>
                                <td align="center"><?php if ($d->sakitApril != 0) {
                                                        echo $d->sakitApril;
                                                    } ?></td>
                                <td align="center"><?php if ($d->izinApril != 0) {
                                                        echo $d->izinApril;
                                                    } ?></td>
                                <td align="center"><?php if ($d->cutiApril != 0) {
                                                        echo $d->cutiApril;
                                                    } ?></td>
                                <td align="center"><?php if ($d->alfaApril != 0) {
                                                        echo $d->alfaApril;
                                                    } ?></td>

                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->hadirMei != 0) {
                                                                            echo $d->hadirMei;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->sakitMei != 0) {
                                                                            echo $d->sakitMei;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->izinMei != 0) {
                                                                            echo $d->izinMei;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->cutiMei != 0) {
                                                                            echo $d->cutiMei;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->alfaMei != 0) {
                                                                            echo $d->alfaMei;
                                                                        } ?></td>

                                <td align="center"><?php if ($d->hadirJuni != 0) {
                                                        echo $d->hadirJuni;
                                                    } ?></td>
                                <td align="center"><?php if ($d->sakitJuni != 0) {
                                                        echo $d->sakitJuni;
                                                    } ?></td>
                                <td align="center"><?php if ($d->izinJuni != 0) {
                                                        echo $d->izinJuni;
                                                    } ?></td>
                                <td align="center"><?php if ($d->cutiJuni != 0) {
                                                        echo $d->cutiJuni;
                                                    } ?></td>
                                <td align="center"><?php if ($d->alfaJuni != 0) {
                                                        echo $d->alfaJuni;
                                                    } ?></td>

                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->hadirJuli != 0) {
                                                                            echo $d->hadirJuli;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->sakitJuli != 0) {
                                                                            echo $d->sakitJuli;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->izinJuli != 0) {
                                                                            echo $d->izinJuli;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->cutiJuli != 0) {
                                                                            echo $d->cutiJuli;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->alfaJuli != 0) {
                                                                            echo $d->alfaJuli;
                                                                        } ?></td>

                                <td align="center"><?php if ($d->hadirAgustus != 0) {
                                                        echo $d->hadirAgustus;
                                                    } ?></td>
                                <td align="center"><?php if ($d->sakitAgustus != 0) {
                                                        echo $d->sakitAgustus;
                                                    } ?></td>
                                <td align="center"><?php if ($d->izinAgustus != 0) {
                                                        echo $d->izinAgustus;
                                                    } ?></td>
                                <td align="center"><?php if ($d->cutiAgustus != 0) {
                                                        echo $d->cutiAgustus;
                                                    } ?></td>
                                <td align="center"><?php if ($d->alfaAgustus != 0) {
                                                        echo $d->alfaAgustus;
                                                    } ?></td>

                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->hadirSeptember != 0) {
                                                                            echo $d->hadirSeptember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->sakitSeptember != 0) {
                                                                            echo $d->sakitSeptember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->izinSeptember != 0) {
                                                                            echo $d->izinSeptember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->cutiSeptember != 0) {
                                                                            echo $d->cutiSeptember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->alfaSeptember != 0) {
                                                                            echo $d->alfaSeptember;
                                                                        } ?></td>

                                <td align="center"><?php if ($d->hadirOktober != 0) {
                                                        echo $d->hadirOktober;
                                                    } ?></td>
                                <td align="center"><?php if ($d->sakitOktober != 0) {
                                                        echo $d->sakitOktober;
                                                    } ?></td>
                                <td align="center"><?php if ($d->izinOktober != 0) {
                                                        echo $d->izinOktober;
                                                    } ?></td>
                                <td align="center"><?php if ($d->cutiOktober != 0) {
                                                        echo $d->cutiOktober;
                                                    } ?></td>
                                <td align="center"><?php if ($d->alfaOktober != 0) {
                                                        echo $d->alfaOktober;
                                                    } ?></td>

                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->hadirNovember != 0) {
                                                                            echo $d->hadirNovember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->sakitNovember != 0) {
                                                                            echo $d->sakitNovember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->izinNovember != 0) {
                                                                            echo $d->izinNovember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->cutiNovember != 0) {
                                                                            echo $d->cutiNovember;
                                                                        } ?></td>
                                <td bgcolor="#D3D3D3" align="center"><?php if ($d->alfaNovember != 0) {
                                                                            echo $d->alfaNovember;
                                                                        } ?></td>

                                <td align="center"><?php if ($d->hadirDesember != 0) {
                                                        echo $d->hadirDesember;
                                                    } ?></td>
                                <td align="center"><?php if ($d->sakitDesember != 0) {
                                                        echo $d->sakitDesember;
                                                    } ?></td>
                                <td align="center"><?php if ($d->izinDesember != 0) {
                                                        echo $d->izinDesember;
                                                    } ?></td>
                                <td align="center"><?php if ($d->cutiDesember != 0) {
                                                        echo $d->cutiDesember;
                                                    } ?></td>
                                <td align="center"><?php if ($d->alfaDesember != 0) {
                                                        echo $d->alfaDesember;
                                                    } ?></td>

                                <td bgcolor="skyblue" align="center;"><?php if ($d->hadirTahuan != 0) {
                                                                            echo $d->hadirTahuan;
                                                                        } ?></td>
                                <td bgcolor="skyblue" align="center"><?php if ($d->sakitTahuan != 0) {
                                                                            echo $d->sakitTahuan;
                                                                        } ?></td>
                                <td bgcolor="skyblue" align="center"><?php if ($d->izinTahuan != 0) {
                                                                            echo $d->izinTahuan;
                                                                        } ?></td>
                                <td bgcolor="skyblue" align="center"><?php if ($d->cutiTahuan != 0) {
                                                                            echo $d->cutiTahuan;
                                                                        } ?></td>
                                <td bgcolor="skyblue" align="center"><?php if ($d->alfaTahuan != 0) {
                                                                            echo $d->alfaTahuan;
                                                                        } ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
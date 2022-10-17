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
<?php
if ($bulan == '1') {
    $bulan = 'JANUARI';
} else if ($bulan == '2') {
    $bulan  = 'FEBRUARI';
} else if ($bulan == '3') {
    $bulan  = 'MARET';
} else if ($bulan == '4') {
    $bulan  = 'APRIL';
} else if ($bulan == '5') {
    $bulan  = 'MEI';
} else if ($bulan == '6') {
    $bulan  = 'JUNI';
} else if ($bulan == '7') {
    $bulan  = 'JULI';
} else if ($bulan == '8') {
    $bulan  = 'AGUSTUS';
} else if ($bulan == '9') {
    $bulan  = 'SEPTEMBER';
} else if ($bulan == '10') {
    $bulan  = 'OKTOBER';
} else if ($bulan == '11') {
    $bulan  = 'NOVEMBER';
} else if ($bulan == '12') {
    $bulan  = 'DESEMBER';
}
?>
<title>DATA KARYAWAN RESIGN</title>
<div style="font-family: calibri;width:100%">
    <div class="card">
        <div class="card-body" style="zoom:100%">
            <div class="col-lg-12">
                <h1 style="text-align: center; font-weight: bold;">
                    DATA KARYAWAN RESIGN<br>
                    PERIODE BULAN <?php echo $bulan . " " . $tahun; ?>
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
                            <th>Tgl Resign</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                            $tgl_masuk      = $d->tgl_masuk;
                            $dateMasuk      = new DateTime($tgl_masuk);

                            $now            = new DateTime();
                            $masaKerja      = $dateMasuk->diff($now)->format("%y Tahun %m Bulan %d Hari");

                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d->nik; ?></td>
                                <td><?php echo $d->nama_karyawan; ?></td>
                                <td><?php echo $d->group; ?></td>
                                <td><?php if ($d->tgl_masuk != '0000-00-00') {
                                        echo DateToIndo($d->tgl_masuk);
                                    } ?></td>
                                <td><?php echo $masaKerja; ?></td>
                                <td><?php echo $d->departemen; ?></td>
                                <td><?php if ($d->tanggal != '0000-00-00') {
                                        echo DateToIndo($d->tanggal);
                                    } ?></td>
                                <td><?php echo $d->keterangan; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
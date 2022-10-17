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
<title>DATA KARYAWAN</title>
<div style="font-family: calibri;width:200%">
    <div class="card">
        <div class="card-body" style="zoom:100%">
            <div class="col-lg-12">
                <h1 style="text-align: center; font-weight: bold;">
                    DATA KARYAWAN <br>
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
                            <th>Masa Kerja</th>
                            <th>Departemen</th>
                            <th>Jabatan</th>
                            <th>Kantor</th>
                            <th>Perusahaan</th>
                            <th>Gender</th>
                            <th>Status Kawin</th>
                            <th>Status Karyawan</th>
                            <th>Pendidikan</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>Umur</th>
                            <th>NIK KTP</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>ISO</th>
                            <th>Berkas</th>
                            <th>Sisa Kontrak</th>
                            <th>Awal Kontrak</th>
                            <th>Akhir Kontrak</th>
                            <th>PIN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d) {
                            $tglkontrak     = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ORDER BY kode_kontrak DESC")->row_array();
                            $kontrak        = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ")->result();
                            $pemutihan      = $this->db->query("SELECT * FROM pemutihan WHERE nik = '$d->nik' ")->result();
                            $jmlhkontrak    = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ")->num_rows();

                            if (isset($tglkontrak['akhir_kontrak'])) {
                                $akhir_kontrak  = $tglkontrak['akhir_kontrak'];
                                $dateKontrak    = new DateTime($akhir_kontrak);

                                $now            = new DateTime();
                                $sisakontrak    = $dateKontrak->diff($now)->format("%m");
                                $kontraksisa    = $dateKontrak->diff($now)->format("%y Tahun %m Bulan %d Hari");
                                if ($sisakontrak <= 0) {
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
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $no++ ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->nik; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->nama_karyawan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->group; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php if ($d->tgl_masuk != '0000-00-00') {
                                                                            echo DateToIndo($d->tgl_masuk);
                                                                        } ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $masaKerja; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->departemen; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->jabatan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->kantor; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->perusahaan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->jk; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->status_kawin; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->status_karyawan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->pendidikan; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->tempat_lahir; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php if ($d->tgl_masuk != '0000-00-00') {
                                                                            echo DateToIndo($d->tgl_lahir);
                                                                        } ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $umur; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->nik_ktp; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->alamat; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->no_hp; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->iso; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->berkas; ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $kontraksisa; ?></td>

                                <td bgcolor="<?php echo $bgcolor; ?>"><?php if (isset($tglkontrak['awal_kontrak'])) {
                                                                            echo DateToIndo($tglkontrak['awal_kontrak']);
                                                                        } else {
                                                                            echo "";
                                                                        } ?></td>
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php if (isset($tglkontrak['akhir_kontrak'])) {
                                                                            echo DateToIndo($tglkontrak['akhir_kontrak']);
                                                                        } else {
                                                                            echo "";
                                                                        } ?></td>
                                                                        
                                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $d->pin; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
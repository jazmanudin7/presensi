<?php
function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
}

function terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "minus " . trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }
    return $hasil;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CETAK KONTRAK KARYAWAN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
</head>
<style>
    @page {
        size: A4;
    }

    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        font-family: tahoma;
    }

    .table th {
        padding: 8px 8px;
        text-align: center;
    }

    .table td {
        padding: 2px 2px;
        font-size: 12px;
    }

    .text-center {
        text-align: center;
    }
</style>

<body class="A4">
    <section class="sheet padding-10mm">
        <table class="table">
            <tr style="text-align: center;">
                <td rowspan="5"><img style="<?php if ($data['perusahaan'] == 'MP') {
                                                echo "width:150px;height:130px";
                                            } else {
                                                echo "width:125x;height:130px";
                                            } ?>" src="<?php echo base_url(); ?>assets/images/<?php if ($data['perusahaan'] == 'MP') {
                                                                                                    echo "LOGO MAKMUR PERMATA.png";
                                                                                                } else {
                                                                                                    echo "LOGO PACIFIC.png";
                                                                                                } ?>"></td>
                <td style="font-size: 16pt;"><b><?php if ($data['perusahaan'] == 'MP') {
                                                    echo "CV MAKMUR PERMATA";
                                                } else {
                                                    echo "CV PACIFIC";
                                                } ?></b><br>Jl Perintis Kemerdekaan No 160 Tasikmalaya<br>Telp : ( 0265 ) 336794,337694 . Fax . (0265) 332329<br>E-mail : pacific.tasikmalaya@gmail.com</td>
            </tr>
        </table>
        <hr>
        <table class="table">
            <tr style="text-align: center;">
                <td style="font-size: 14pt;"><b>PERJANJIAN KERJA</b></td>
            </tr>
        </table>
        <hr style="margin-block-start: 0.0em;margin-block-end: 0.0em;" width="200px">
        <table class="table">
            <tr style="text-align: center;">
                <td style="font-size: 14pt;"><b>WAKTU TERTENTU</b></td>
            </tr>
        </table>
        <table class="table" style="text-align:justify ;">
            <tr>
                <td colspan="4" style="padding-top: 20px;">Yang bertanda tangan dibawah ini :</td>
            </tr>
            <tr>
                <td style="font-size: 12px;width:35px"></td>
                <td style="font-size: 12px;width:120px">Nama</td>
                <td style="font-size: 12px;width:10px">:</td>
                <td>Eiko Fauzi Rustandi</td>
            </tr>
            <tr>
                <td></td>
                <td>Jabatan</td>
                <td>:</td>
                <td>HRD SPV</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>:</td>
                <td>Jl. Perintis Kemerdekaan No.160 Tasikmalaya</td>
            </tr>
            <tr>
                <td style="font-size: 12px;padding-top:20px;padding-bottom:20px" colspan="4">Bertindak untuk dan atas nama <?php if ($data['perusahaan'] == 'MP') {
                                                                                                                                echo "CV Makmur Permata";
                                                                                                                            } else {
                                                                                                                                echo "CV Pacific";
                                                                                                                            } ?> berkedudukan di Tasikmalaya selanjutnya disebut pihak kesatu.</td>
            </tr>
            <tr>
                <td style="font-size: 12px;width:35px"></td>
                <td style="font-size: 12px;width:120px">Nama</td>
                <td style="font-size: 12px;width:10px">:</td>
                <td><?php echo $data['nama_karyawan']; ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $data['jabatan']; ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
            <tr>
                <td></td>
                <td>No. Identitas</td>
                <td>:</td>
                <td><?php echo $data['nik_ktp']; ?></td>
            </tr>
            <tr>
                <td style="font-size: 12px;padding-top:20px;padding-bottom:20px" colspan="4">
                    Bertindak atas nama diri sendiri selanjutnya disebut pihak kedua.<br>
                    Pihak kesatu dan pihak kedua telah mengadakan kesepakatan Perjanjian Kerja Waktu Tertentu dengan ketentuan sebagai berikut :</td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 1<br>MASA BERLAKU</b></td>
            </tr>
            <?php
            $nik            = $data['nik'];
            $kontrak        = $this->db->query("SELECT * FROM kontrak WHERE nik = '$nik' ORDER BY kode_kontrak DESC")->row_array();
            if (isset($kontrak['awal_kontrak'])) {
                $awal_kontrak   = $kontrak['awal_kontrak'];
                $tglKontrak     = new DateTime($awal_kontrak);
                $akhir_kontrak  = $kontrak['akhir_kontrak'];
                $now            = new DateTime($akhir_kontrak);
                $bulanKontrak   = $tglKontrak->diff($now)->format("%m");
                $awalkontrak    = date("d M Y", strtotime($awal_kontrak));
                $akhirkontrak   = date("d M Y", strtotime($akhir_kontrak));
            } else {
                $bulanKontrak   = "0";
                $awalkontrak    = "";
                $akhirkontrak    = "";
            }
            ?>
            <tr>
                <td colspan="4" style="font-size: 12px;padding-bottom:20px">
                    <ol style="padding-inline-start: 1em;">
                        <li>Perjanjian kerja ini berlaku <?php echo $bulanKontrak; ?> (<?php echo ucwords(terbilang($bulanKontrak)); ?>) bulan, terhitung dari tanggal <?php echo $awalkontrak; ?> sampai dengan tanggal <?php echo $akhirkontrak; ?></li>
                        <li>Perjanjian ini dapat diperpanjang untuk waktu yang disepakati dan untuk perpanjangan perjanjian kerja waktu tertentu ini pihak kesatu akan memberitahukan terlebih dahulu kepada pihak kedua dalam waktu 1 (satu) minggu sebelum perjanjian kerja waktu tertentu ini berakhir.</li>
                    </ol>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 2<br>STATUS DAN PENDAPATAN</b></td>
            </tr>
            <?php
            $jumlah = $data['gaji_pokok'] + $data['masa_kerja'] + $data['tunjangan_jabatan'] + $data['tanggung_jawab'] + $data['makan'] + $data['istri'] + $data['skill_khusus'];
            ?>
            <tr>
                <td colspan="4">
                    <ol style="padding-inline-start: 1em;">
                        <li>Pihak Kedua menerima pekerjaan yang diberikan pihak <?php if ($data['perusahaan'] == 'MP') {
                                                                                    echo "CV Makmur Permata";
                                                                                } else {
                                                                                    echo "CV Pacific";
                                                                                } ?> dengan jabatan sebagai <?php echo $data['jabatan']; ?> yang berlokasi di <?php echo $data['kantor']; ?> serta bersedia ditempatkan diluar lokasi dan departemen tersebut bila Perusahaan memerlukan.</li>
                        <li>Pihak kedua setuju menerima upah sebesar Rp <?php echo number_format($jumlah); ?> ,- dengan rincian sebagai berikut :</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['gaji_pokok'])) {
                            echo number_format($data['gaji_pokok']);
                        } ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Masa Kerja</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['masa_kerja'])) {
                            echo number_format($data['masa_kerja']);
                        } ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Tj. Jabatan</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['tunjangan_jabatan'])) {
                            echo number_format($data['tunjangan_jabatan']);
                        } ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Tj. Tanggungjawab</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['tanggung_jawab'])) {
                            echo number_format($data['tanggung_jawab']);
                        } ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Tj. Makan</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['makan'])) {
                            echo number_format($data['makan']);
                        } ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Tj. Istri</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['istri'])) {
                            echo number_format($data['istri']);
                        } ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Skill Khusus</td>
                <td>:</td>
                <td>Rp. <?php if (isset($data['skill_khusus'])) {
                            echo number_format($data['skill_khusus']);
                        } ?></td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;padding-top: 30px;" colspan="4"><b>PASAL 3<br>JANGKA WAKTU DAN WAKTU KERJA</b></td>
            </tr>
            <tr>
                <td colspan="4">
                    <ol style="padding-inline-start: 1em;">
                        <li>Jam kerja adalah 8 jam sehari (termasuk istirahat 1 jam) atau 40 Jam seminggu Senin s/d Jumat 07.00 – 15.00 WIB dan Sabtu Jam 07.00 – 12.00 WIB. Atau sesuai jadwal kerja yang disepakati bersama</li>
                        <li>Untuk lokasi cabang, hari dan jam kerja akan dilaksanakan dengan ketentuan yang telah disepakati oleh masing-masing cabang</li>
                    </ol>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>
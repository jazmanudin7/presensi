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
        <table class="table" style="text-align:justify;">
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 4<br>PEMUTUSAN HUBUNGAN KERJA</b></td>
            </tr>
            <tr>
                <td colspan="4">
                    <ol style="padding-inline-start: 1em;">
                        <li>Perjanjian kerja ini dapat terputus dan berakhir sebelum masa berlakunya, apabila :</li>
                        <ol type='a' style="padding-inline-start: 1em;">
                            <li>Hasil Evaluasi Pekerja dinilai tidak mampu dan tidak cakap melaksanakan tugasnya.</li>
                            <li>Pekerja tidak hadir selama 5 (lima) hari secara berurutan dalam 1 (satu) bulan, tanpa izin atau tanpa alasan yang bisa dipertanggungjawabkan.</li>
                            <li>Pekerja mengajukan pengunduran diri.</li>
                        </ol>
                        <li>Dalam hal pekerja diberhentikan karena kesalahan pekerja atau pengunduran diri maka Pekerja hanya akan menerima pendapatan atau upah sampai saat tanggal pemutusan perjanjian kerja tersebut.</li>
                        <li>Dalam hal pihak kesatu atau pihak kedua melakukan pemutusan perjanjian kerja sebagaimana dimaksud diatas maka pihak kedua tidak berhak menuntut ganti rugi.</li>
                        <li>Apabila pihak kedua habis kontrak dan tidak diperpanjang, maka pihak kesatu tidak wajib memberikan alasan tentang tidak diperpanjangnya.</li>
                        <li>Untuk hal-hal yang belum tercantum dalam syarat-syarat kerja ini berlaku ketentuan-ketentuan umum pada PKB.</li>
                        <li>Apabila dikemudian hari terdapat kekeliruan pada surat perjanjian kerja bersama ini maka akan ditinjau kembali dan diperbaiki sebagaimana mestinya.</li>
                    </ol>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 5<br>TATA TERTIB DAN DISIPLIN KERJA</b></td>
            </tr>
            <tr>
                <td colspan="4">
                    <ol style="padding-inline-start: 1em;">
                        <li>Tata tertib dan disiplin kerja berlaku ketentuan Peraturan Perusahaan yang tercantum dalam PKB (Perjanjian Kerja Bersama)</li>
                        <li>Pelanggaran tata tertib PKB (Perjanjian Kerja Bersama) oleh pihak kedua dapat diberikan peringatan baik lisan maupun tulisan dan bila terpaksa berlaku scorsing sampai pemutusan hubungan kerja dengan landasan hukum yang dipergunakan oleh pihak kesatu adalah PKB (Perjanjian Kerja Bersama) dan peraturan ketenagakerjaan yang berlaku.</li>
                        <li>Izin tidak masuk kerja terlebih dahulu meminta izin tertulis kepada pimpinan. </li>
                        <li>Pihak kesatu berhak memindahkan / menempatkan pihak kedua dari pekerjaan yang dianggap perlu oleh pihak kesatu dan pihak kedua wajib mematuhi dan melaksanakannya dengan penuh tanggung jawab.</li>
                    </ol>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 6<br>KETENTUAN SANKSI</b></td>
            </tr>
            <tr>
                <td colspan="4">
                    <ol style="padding-inline-start: 1em;">
                        <?php
                        $jabatan    = $data['jabatan'];
                        $ketentuan  = $this->db->query("SELECT * FROM ketentuan WHERE jabatan = '$jabatan' ")->result();
                        foreach ($ketentuan as $k) { ?>
                            <li><?php echo $k->keterangan; ?></li>
                        <?php } ?>
                    </ol>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 7<br>JAMINAN SOSIAL</b></td>
            </tr>
            <tr>
                <td colspan="4">
                    <ol style="padding-inline-start: 1em;">
                        <li>Seragam diatur di Peraturan Perusahaan</li>
                        <li>Cuti diberikan setelah masa kerja satu tahun dan pengambilan cutinya jatuh pada bulan ketiga belas</li>
                        <li>Cuti dalam kasus meninggalnya istri, ayah/ibu kandung, dan anak kandung diberikan cuti selama dua hari berturut turut.</li>
                    </ol>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13pt;" colspan="4"><b>PASAL 8<br>PENUTUP</b></td>
            </tr>
            <tr>
                <td colspan="4">Demikian perjanjian kerja bersama waktu tertentu ini dibuat dan ditandatangani oleh kedua belah pihak dalam keadaan sehat walafiat, sadar, mengerti tanpa ada paksaan dari siapapun atau pihak manapun</td>
            </tr>
            <tr style="text-align: center;">
                <td style="padding-top: 20px;" colspan="4">Tasikmalaya, <?php echo date("d M Y", strtotime(Date('Y-m-d'))); ?></td>
            </tr>
            <tr style="text-align: center;">
                <td style="font-size: 13px;">Pihak Kedua</td>
                <td></td>
                <td style="font-size: 13px;">Pihak Kesatu</td>
                <td style="font-size: 13px;">Mengetahui</td>
            </tr>
            <tr style="text-align: center;">
                <td style="padding-top: 100px;"><u><?php echo $data['nama_karyawan']; ?></u></td>
                <td style="padding-top: 100px;"></td>
                <td style="padding-top: 100px;"><u>Eiko Fauzi Rustandi</u></td>
                <td style="padding-top: 100px;"><u>Deden Mochammad Saman</u></td>
            </tr>
            <tr style="text-align: center;">
                <td>Karyawan</td>
                <td></td>
                <td>HRD SPV</td>
                <td>HRD Manager</td>
            </tr>
        </table>
    </section>
</body>

</html>
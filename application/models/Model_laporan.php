<?php

class Model_laporan extends CI_Model
{

  function getDepartemen()
  {

    return $this->db->query("SELECT karyawan.departemen FROM karyawan WHERE karyawan.departemen != '' GROUP BY karyawan.departemen ORDER BY karyawan.departemen ASC ");
  }

  function getGroup($departemen = "")
  {

    return $this->db->query("SELECT karyawan.group FROM karyawan WHERE karyawan.group != '' AND karyawan.departemen = '$departemen' GROUP BY karyawan.group ORDER BY karyawan.group ASC ");
  }

  function getKantor($group = "")
  {

    return $this->db->query("SELECT karyawan.kantor FROM karyawan WHERE karyawan.kantor != '' GROUP BY karyawan.kantor ORDER BY karyawan.kantor ASC ");
  }

  function getKaryawan()
  {

    return $this->db->query("SELECT * FROM karyawan ORDER BY karyawan.nama_karyawan ASC ");
  }

  function getListKaryawanResign($departemen, $bulan, $tahun)
  {

    if ($departemen != '') {
      $departemen      = "AND karyawan.departemen = '$departemen' ";
    }

    return $this->db->query("SELECT * FROM karyawan
    INNER JOIN resign ON resign.nik = karyawan.nik
    WHERE karyawan.status_aktif = 'Tidak Aktif' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' "
      . $departemen
      . "
    ORDER BY nama_karyawan ASC ");
  }

  function getListKaryawan($nik, $group, $kantor, $departemen)
  {

    if ($nik != '') {
      $nik      = "AND karyawan.nik = '$nik' ";
    }

    if ($departemen != '') {
      $departemen      = "AND karyawan.departemen = '$departemen' ";
    }

    if ($group != '') {
      $group      = "AND karyawan.group = '$group' ";
    }

    if ($kantor != '') {
      $kantor      = "AND karyawan.kantor = '$kantor' ";
    }

    return $this->db->query("SELECT * FROM karyawan
    WHERE karyawan.status_aktif = 'Aktif' " . $nik
      . $departemen
      . $group
      . $kantor
      . "
    ORDER BY nama_karyawan ASC ");
  }


  function getAbsensiLembur($bulan, $tahun, $group, $kantor)
  {

    if ($bulan == 1) {
      $bulans     = 12;
      $tahuns     = $tahun - 1;
    } else {
      $bulans     = $bulan - 1;
      $tahuns     = $tahun;
    }

    if ($group != '') {
      $group      = "WHERE karyawan.group = '$group' ";
    }

    if ($kantor != '') {
      $kantor      = "AND karyawan.kantor = '$kantor' ";
    }

    return $this->db->query("SELECT 
    karyawan.nama_karyawan,
    karyawan.nik
    
    FROM karyawan
    LEFT JOIN absensi ON absensi.nik = karyawan.nik "
      . $group
      . $kantor
      . " 
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }

  function getAbsensiPerDepartemen($bulan, $tahun)
  {
    $departemen     = $this->session->userdata('dept');
    $kantor         = $this->session->userdata('kantor');
    if ($bulan == 1) {
      $bulans     = 12;
      $tahuns     = $tahun - 1;
    } else {
      $bulans     = $bulan - 1;
      $tahuns     = $tahun;
    }

    return $this->db->query("SELECT 
    *, karyawan.nama_karyawan,
    karyawan.nik
    
    FROM karyawan
    LEFT JOIN absensi ON absensi.nik = karyawan.nik 
    WHERE karyawan.departemen = '$departemen' AND karyawan.kantor = '$kantor'
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }

  function getAbsensiJamKerja($bulan, $tahun, $group, $kantor, $departemen)
  {

    if ($bulan == 1) {
      $bulans     = 12;
      $tahuns     = $tahun - 1;
    } else {
      $bulans     = $bulan - 1;
      $tahuns     = $tahun;
    }

    if ($group != '') {
      $group      = "AND karyawan.group = '$group' ";
    }

    if ($kantor != '') {
      $kantor      = "AND karyawan.kantor = '$kantor' ";
    }

    if ($departemen != '') {
      $departemen      = "AND karyawan.departemen = '$departemen' ";
    }

    return $this->db->query("SELECT 
    *, karyawan.nama_karyawan,
    karyawan.nik
    
    FROM karyawan
    LEFT JOIN absensi ON absensi.nik = karyawan.nik WHERE status_aktif = 'Aktif' AND karyawan.nik NOT LIKE '%PHL%' "
      . $group
      . $kantor
      . $departemen
      . " 
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }

  function getRekapTahunan($tahun, $group, $departemen, $kantor)
  {

    if ($group != '') {
      $group      = "AND karyawan.group = '$group' ";
    }

    if ($departemen != '') {
      $departemen      = "AND karyawan.departemen = '$departemen' ";
    }

    if ($kantor != '') {
      $kantor      = "AND karyawan.kantor = '$kantor' ";
    }

    return $this->db->query("SELECT 
    karyawan.nama_karyawan,
    karyawan.nik,
    
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '1' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirJanuari,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '2' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirFebruari,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '3' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirMaret,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '4' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirApril,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '5' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirMei,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '6' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirJuni,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '7' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirJuli,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '8' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirAgustus,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '9' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirSeptember,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '10' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirOktober,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '11' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirNovember,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND MONTH(absensi.tanggal) = '12' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirDesember,
    
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '1' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiJanuari,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '2' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiFebruari,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '3' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiMaret,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '4' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiApril,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '5' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiMei,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '6' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiJuni,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '7' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiJuli,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '8' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiAgustus,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '9' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiSeptember,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '10' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiOktober,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '11' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiNovember,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti' AND MONTH(surat_izin.tanggal) = '12' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiDesember,
    
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '1' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaJanuari,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '2' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaFebruari,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '3' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaMaret,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '4' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaApril,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '5' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaMei,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '6' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaJuni,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '7' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaJuli,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '8' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaAgustus,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '9' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaSeptember,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '10' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaOktober,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '11' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaNovember,
    COUNT(CASE WHEN absensi.keterangan = 'Alfa' AND MONTH(absensi.tanggal) = '12' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaDesember,
    
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '1' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinJanuari,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '2' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinFebruari,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '3' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinMaret,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '4' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinApril,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '5' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinMei,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '6' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinJuni,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '7' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinJuli,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '8' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinAgustus,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '9' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinSeptember,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '10' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinOktober,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '11' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinNovember,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND MONTH(surat_izin.tanggal) = '12' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinDesember,
    
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '1' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitJanuari,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '2' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitFebruari,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '3' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitMaret,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '4' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitApril,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '5' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitMei,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '6' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitJuni,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '7' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitJuli,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '8' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitAgustus,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '9' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitSeptember,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '10' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitOktober,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '11' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitNovember,
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND MONTH(surat_izin.tanggal) = '12' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitDesember,
    
    COUNT(CASE WHEN surat_izin.keterangan = 'Sakit' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS sakitTahuan,
    COUNT(CASE WHEN surat_izin.keterangan = 'Izin' AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS izinTahuan,
    COUNT(CASE WHEN surat_izin.keterangan = 'Cuti'AND YEAR(surat_izin.tanggal) = '$tahun' THEN '' END) AS cutiTahuan,
    COUNT(CASE WHEN absensi.keterangan = 'H' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS hadirTahuan,
    COUNT(CASE WHEN absensi.keterangan = 'A' AND YEAR(absensi.tanggal) = '$tahun' THEN '' END) AS alfaTahuan
    
    FROM karyawan
    LEFT JOIN absensi ON absensi.nik = karyawan.nik
    LEFT JOIN surat_izin ON surat_izin.nik = karyawan.nik
    WHERE karyawan.status_aktif = 'Aktif'
    " . $group
      . $departemen
      . $kantor
      . " 
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }

  function getRekapAbsensi($bulan, $tahun, $group)
  {

    if ($bulan == 1) {
      $bulans     = 12;
      $tahuns     = $tahun - 1;
    } else {
      $bulans     = $bulan - 1;
      $tahuns     = $tahun;
    }

    if ($group != '') {
      $group      = "WHERE karyawan.group = '$group' ";
    }

    return $this->db->query("SELECT 
    karyawan.nama_karyawan,
    karyawan.nik,
    MAX(IF (DAY(absensi.tanggal) = '1' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Satu,
    MAX(IF (DAY(absensi.tanggal) = '2' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Dua,
    MAX(IF (DAY(absensi.tanggal) = '3' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Tiga,
    MAX(IF (DAY(absensi.tanggal) = '4' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Empat,
    MAX(IF (DAY(absensi.tanggal) = '5' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Lima,
    MAX(IF (DAY(absensi.tanggal) = '6' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Enam,
    MAX(IF (DAY(absensi.tanggal) = '7' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Tujuh,
    MAX(IF (DAY(absensi.tanggal) = '8' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Delapan,
    MAX(IF (DAY(absensi.tanggal) = '9' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Sembilan,
    MAX(IF (DAY(absensi.tanggal) = '10' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Sepuluh,
    MAX(IF (DAY(absensi.tanggal) = '11' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Sebelas,
    MAX(IF (DAY(absensi.tanggal) = '12' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duabelas,
    MAX(IF (DAY(absensi.tanggal) = '13' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Tigabelas,
    MAX(IF (DAY(absensi.tanggal) = '14' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Empatbelas,
    MAX(IF (DAY(absensi.tanggal) = '15' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Limabelas,
    MAX(IF (DAY(absensi.tanggal) = '16' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Enambelas,
    MAX(IF (DAY(absensi.tanggal) = '17' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Tujuhbelas,
    MAX(IF (DAY(absensi.tanggal) = '18' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Delapanbelas,
    MAX(IF (DAY(absensi.tanggal) = '19' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Sembilanbelas,
    MAX(IF (DAY(absensi.tanggal) = '20' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duapuluh,
    MAX(IF (DAY(absensi.tanggal) = '21' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duasatu,
    MAX(IF (DAY(absensi.tanggal) = '22' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duadua,
    MAX(IF (DAY(absensi.tanggal) = '23' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duatiga,
    MAX(IF (DAY(absensi.tanggal) = '24' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duaempat,
    MAX(IF (DAY(absensi.tanggal) = '25' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Dualima,
    MAX(IF (DAY(absensi.tanggal) = '26' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duaenam,
    MAX(IF (DAY(absensi.tanggal) = '27' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duatujuh,
    MAX(IF (DAY(absensi.tanggal) = '28' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duadelapan,
    MAX(IF (DAY(absensi.tanggal) = '29' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Duasembilan,
    MAX(IF (DAY(absensi.tanggal) = '30' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Tigapuluh,
    MAX(IF (DAY(absensi.tanggal) = '31' AND MONTH(absensi.tanggal) = '$bulan' AND YEAR(absensi.tanggal) = '$tahun' , absensi.keterangan , '')) AS Tigasatu,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulans' AND YEAR(tanggal) = '$tahuns' , tanggal , '')) AS tmDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulans' AND YEAR(tanggal) = '$tahuns' , tanggal , '')) AS tmDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulans' AND YEAR(tanggal) = '$tahuns' , tanggal , '')) AS tmDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulans' AND YEAR(tanggal) = '$tahuns' , tanggal , '')) AS tmDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulans' AND YEAR(tanggal) = '$tahuns' , tanggal , '')) AS tmTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulans' AND YEAR(tanggal) = '$tahuns' , tanggal , '')) AS tmTigasatu,
    
    COUNT(CASE WHEN keterangan = 'H' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS hadir,
    COUNT(CASE WHEN keterangan = 'Sakit' OR keterangan = 'SID' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS sakit,
    COUNT(CASE WHEN keterangan = 'Izin' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS izin,
    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cuti,
    COUNT(CASE WHEN keterangan = 'Alfa' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS alfa
    
    FROM karyawan
    LEFT JOIN absensi ON absensi.nik = karyawan.nik
    " . $group
      . " 
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }

  function getDetailAbsensi($bulan, $tahun, $group = "", $kantor = "", $departemen = "")
  {

    if ($bulan == 1) {
      $bulans     = 12;
      $tahuns     = $tahun - 1;
    } else {
      $bulans     = $bulan - 1;
      $tahuns     = $tahun;
    }

    $dept         = $this->session->userdata('dept');
    if ($group != '') {
      $group      = "AND karyawan.group = '$group' ";
    }

    if ($kantor != '') {
      $kantor      = "AND karyawan.kantor = '$kantor' ";
    } else {
      $kantor      = "AND karyawan.departemen = '$dept' ";
    }

    if ($departemen != '') {
      $departemen      = "AND karyawan.departemen = '$departemen' ";
    }


    return $this->db->query("SELECT 
    karyawan.nama_karyawan,
    karyawan.nik,
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Satu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Dua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Tiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Empat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Lima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Enam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Tujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Delapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Sembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Sepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Sebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Tigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Empatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Limabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Enambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Tujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Delapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Sembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Dualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Duasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Tigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , keterangan , '')) AS Tigasatu,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , masuk , '')) AS jmTigasatu,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$tahun' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$tahun' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$tahun' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$tahun' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$tahun' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$tahun' AND YEAR(tanggal) = '$tahun' , pulang , '')) AS jpTigasatu,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigasatu,
    
    COUNT(CASE WHEN keterangan = 'H' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS hadir,
    COUNT(CASE WHEN keterangan = 'Sakit' OR keterangan = 'SID' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS sakit,
    COUNT(CASE WHEN keterangan = 'Izin' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS izin,
    COUNT(CASE WHEN keterangan = 'Cuti' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS cuti,
    COUNT(CASE WHEN keterangan = 'Alfa' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' THEN '' END) AS alfa
    
    FROM karyawan
    LEFT JOIN absensi ON absensi.nik = karyawan.nik
    WHERE karyawan.status_aktif = 'Aktif' "
      . $group
      . $departemen
      . $kantor
      . " 
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }

  function getDetailLembur($bulan, $tahun, $group)
  {

    if ($bulan == 1) {
      $bulans     = 12;
      $tahuns     = $tahun - 1;
    } else {
      $bulans     = $bulan - 1;
      $tahuns     = $tahun;
    }

    if ($group != '') {
      $group      = "WHERE karyawan.group = '$group' ";
    }

    return $this->db->query("SELECT 
    karyawan.nama_karyawan,
    karyawan.nik,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , dari , '')) AS jmTigasatu,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , sampai , '')) AS jpTigasatu,
    
    MAX(IF (DAY(tanggal) = '1' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSatu,
    MAX(IF (DAY(tanggal) = '2' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDua,
    MAX(IF (DAY(tanggal) = '3' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTiga,
    MAX(IF (DAY(tanggal) = '4' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEmpat,
    MAX(IF (DAY(tanggal) = '5' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmLima,
    MAX(IF (DAY(tanggal) = '6' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEnam,
    MAX(IF (DAY(tanggal) = '7' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTujuh,
    MAX(IF (DAY(tanggal) = '8' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDelapan,
    MAX(IF (DAY(tanggal) = '9' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSembilan,
    MAX(IF (DAY(tanggal) = '10' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSepuluh,
    MAX(IF (DAY(tanggal) = '11' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSebelas,
    MAX(IF (DAY(tanggal) = '12' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuabelas,
    MAX(IF (DAY(tanggal) = '13' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigabelas,
    MAX(IF (DAY(tanggal) = '14' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEmpatbelas,
    MAX(IF (DAY(tanggal) = '15' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmLimabelas,
    MAX(IF (DAY(tanggal) = '16' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmEnambelas,
    MAX(IF (DAY(tanggal) = '17' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTujuhbelas,
    MAX(IF (DAY(tanggal) = '18' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDelapanbelas,
    MAX(IF (DAY(tanggal) = '19' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmSembilanbelas,
    MAX(IF (DAY(tanggal) = '20' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuapuluh,
    MAX(IF (DAY(tanggal) = '21' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuasatu,
    MAX(IF (DAY(tanggal) = '22' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuadua,
    MAX(IF (DAY(tanggal) = '23' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuatiga,
    MAX(IF (DAY(tanggal) = '24' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuaempat,
    MAX(IF (DAY(tanggal) = '25' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDualima,
    MAX(IF (DAY(tanggal) = '26' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuaenam,
    MAX(IF (DAY(tanggal) = '27' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuatujuh,
    MAX(IF (DAY(tanggal) = '28' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuadelapan,
    MAX(IF (DAY(tanggal) = '29' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmDuasembilan,
    MAX(IF (DAY(tanggal) = '30' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigapuluh,
    MAX(IF (DAY(tanggal) = '31' AND MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' , tanggal , '')) AS tmTigasatu
    
    FROM karyawan
    LEFT JOIN detail_lembur ON karyawan.nik = detail_lembur.nik
    LEFT JOIN lembur ON lembur.kode_lembur = detail_lembur.kode_lembur
    " . $group
      . " 
    GROUP BY karyawan.nik
    ORDER BY nama_karyawan ASC ");
  }
}

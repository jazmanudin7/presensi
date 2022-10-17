<?php

class Model_absensi extends CI_Model
{

  function getabsensi()
  {

    return $this->db->query("SELECT * FROM absensi
    INNER JOIN karyawan ON karyawan.nik = absensi.nik
    ORDER BY tanggal DESC LIMIT 5000
    ");
  }


  function getAbsensiByID()
  {

    $kode_absensi        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM absensi 
    INNER JOIN karyawan ON karyawan.nik = absensi.nik
    WHERE kode_absensi = '$kode_absensi' ")->row_array();
  }

  function hapusAbsensi()
  {

    $kode_absensi        = $this->uri->segment(3);
    $this->db->query("DELETE FROM absensi WHERE kode_absensi = '$kode_absensi' ");
    redirect('absensi');
  }

  function insertAbsensi()
  {

    $nik            = $this->input->post('nik');
    $tanggal        = $this->input->post('tanggal');
    $shift          = $this->input->post('shift');
    $jenis_jam      = $this->input->post('jenis_jam');

    if ($jenis_jam == 'Full') {
      if ($shift == 'Non Shift') {
        $masuk      = '08:00:00';
        $pulang     = '16:00:00';
        $keterangan = 'H';
      } else if ($shift == 'Shift 1') {
        $masuk      = '07:00:00';
        $pulang     = '15:00:00';
        $keterangan = 'H';
      } else if ($shift == 'Shift 2') {
        $masuk      = '15:00:00';
        $pulang     = '23:00:00';
        $keterangan = 'H';
      } else if ($shift == 'Shift 3') {
        $masuk      = '23:00:00';
        $pulang     = '07:00:00';
        $keterangan = 'H';
      }
    } else if ($jenis_jam == '50') {
      if ($shift == 'Non Shift') {
        $masuk      = '08:00:00';
        $pulang     = '12:50:00';
        $keterangan = 'H';
      } else if ($shift == 'Shift 1') {
        $masuk      = '07:00:00';
        $pulang     = '11:50:00';
        $keterangan = 'H';
      } else if ($shift == 'Shift 2') {
        $masuk      = '15:00:00';
        $pulang     = '19:50:00';
        $keterangan = 'H';
      } else if ($shift == 'Shift 3') {
        $masuk      = '23:00:00';
        $pulang     = '03:50:00';
        $keterangan = 'H';
      }
    } else if ($jenis_jam == '25') {
      if ($shift == 'Non Shift') {
        $masuk      = '08:00:00';
        $pulang     = '09:45';
        $keterangan = 'H';
      } else if ($shift == 'Shift 1') {
        $masuk      = '07:00:00';
        $pulang     = '08:45';
        $keterangan = 'H';
      } else if ($shift == 'Shift 2') {
        $masuk      = '15:00:00';
        $pulang     = '16:45';
        $keterangan = 'H';
      } else if ($shift == 'Shift 3') {
        $masuk      = '23:00:00';
        $pulang     = '00:45';
        $keterangan = 'H';
      }
    } else if ($jenis_jam == '0') {
      if ($shift == 'Non Shift') {
        $masuk      = '08:00:00';
        $pulang     = '08:00:00';
        $keterangan = 'A';
        $shift      = 'Non Shift';
      } else if ($shift == 'Shift 1') {
        $masuk      = '07:00:00';
        $pulang     = '07:00:00';
        $keterangan = 'A';
        $shift      = 'Shift 1';
      } else if ($shift == 'Shift 2') {
        $masuk      = '15:00:00';
        $pulang     = '15:00:00';
        $keterangan = 'A';
        $shift      = 'Shift 2';
      } else if ($shift == 'Shift 3') {
        $masuk      = '23:00:00';
        $pulang     = '23:00:00';
        $keterangan = 'A';
        $shift      = 'Shift 3';
      }
    }

    $data = array(

      'nik'             => $nik,
      'masuk'           => $masuk,
      'pulang'          => $pulang,
      'tanggal'         => $tanggal,
      'shift'           => $shift,
      'keterangan'      => $keterangan,

    );

    $this->db->insert('absensi', $data);
    redirect('absensi');
  }

  function updateAbsensi()
  {

    $kode_absensi   = $this->input->post('kode_absensi');
    $tanggal        = $this->input->post('tanggal');
    $masuk          = $this->input->post('masuk');
    $pulang         = $this->input->post('pulang');
    $shift          = $this->input->post('shift');


    $data = array(

      'tanggal'         => $tanggal,
      'shift'           => $shift,
      'masuk'           => $masuk,
      'pulang'          => $pulang,

    );

    $this->db->where('kode_absensi', $kode_absensi);
    $this->db->update('absensi', $data);
    redirect('absensi');
  }
}

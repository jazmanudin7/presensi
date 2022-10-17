<?php

class Model_penilaian extends CI_Model
{

  function getPenilaian()
  {

    return $this->db->query("SELECT * FROM penilaian INNER JOIN karyawan ON karyawan.nik=penilaian.nik ORDER BY karyawan.nik");
  }

  function getPenilaianByID()
  {

    $kode_penilaian        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM penilaian INNER JOIN karyawan ON karyawan.nik=penilaian.nik  WHERE kode_penilaian = '$kode_penilaian' ")->row_array();
  }

  function hapusPenilaian()
  {

    $kode_penilaian        = $this->uri->segment(3);
    $this->db->query("DELETE FROM penilaian WHERE kode_penilaian = '$kode_penilaian' ");
    redirect('penilaian');
  }

  function insertPenilaian()
  {

    $kode_penilaian   = $this->input->post('kode_penilaian');
    $nik            = $this->input->post('nik');
    $awal_penilaian   = $this->input->post('awal_penilaian');
    $akhir_penilaian  = $this->input->post('akhir_penilaian');
    $penilaian_ke     = $this->input->post('penilaian_ke');
    $jenis_penilaian  = $this->input->post('jenis_penilaian');


    $data = array(

      'kode_penilaian'    => $kode_penilaian,
      'nik'             => $nik,
      'awal_penilaian'    => $awal_penilaian,
      'akhir_penilaian'   => $akhir_penilaian,
      'penilaian_ke'      => $penilaian_ke,
      'jenis_penilaian'   => $jenis_penilaian,

    );
    $this->db->insert('penilaian', $data);
    redirect('penilaian');
  }

  function updatePenilaian()
  {

    $kode_penilaian   = $this->input->post('kode_penilaian');
    $nik            = $this->input->post('nik');
    $awal_penilaian   = $this->input->post('awal_penilaian');
    $akhir_penilaian  = $this->input->post('akhir_penilaian');
    $penilaian_ke     = $this->input->post('penilaian_ke');
    $jenis_penilaian  = $this->input->post('jenis_penilaian');

    $data = array(

      'kode_penilaian'    => $kode_penilaian,
      'nik'             => $nik,
      'awal_penilaian'    => $awal_penilaian,
      'akhir_penilaian'   => $akhir_penilaian,
      'penilaian_ke'      => $penilaian_ke,
      'jenis_penilaian'   => $jenis_penilaian,

    );
    $this->db->where('kode_penilaian', $kode_penilaian);
    $this->db->update('penilaian', $data);
    redirect('penilaian');
  }
}

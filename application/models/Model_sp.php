<?php

class Model_sp extends CI_Model
{

  function getSP()
  {

    return $this->db->query("SELECT * FROM sp INNER JOIN karyawan ON karyawan.nik=sp.nik ORDER BY karyawan.nik");
  }

  function getSPByID()
  {

    $kode_sp        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM sp INNER JOIN karyawan ON karyawan.nik=sp.nik  WHERE kode_sp = '$kode_sp' ")->row_array();
  }

  function hapusSP()
  {

    $kode_sp        = $this->uri->segment(3);
    $this->db->query("DELETE FROM sp WHERE kode_sp = '$kode_sp' ");
    redirect('sp');
  }

  function insertSP()
  {

    $kode_sp    = $this->input->post('kode_sp');
    $nik        = $this->input->post('nik');
    $dari       = $this->input->post('dari');
    $sampai     = $this->input->post('sampai');
    $keterangan = $this->input->post('keterangan');


    $data = array(

      'kode_sp'         => $kode_sp,
      'nik'             => $nik,
      'dari'            => $dari,
      'sampai'          => $sampai,
      'keterangan'      => $keterangan,

    );
    $this->db->insert('sp', $data);
    redirect('sp');
  }

  function updateSP()
  {

    $kode_sp    = $this->input->post('kode_sp');
    $nik        = $this->input->post('nik');
    $dari       = $this->input->post('dari');
    $sampai     = $this->input->post('sampai');
    $keterangan = $this->input->post('keterangan');

    $data = array(

      'kode_sp'         => $kode_sp,
      'nik'             => $nik,
      'dari'            => $dari,
      'sampai'          => $sampai,
      'keterangan'      => $keterangan,

    );
    $this->db->where('kode_sp', $kode_sp);
    $this->db->update('sp', $data);
    redirect('sp');
  }
}

<?php

class Model_kontrak extends CI_Model
{

  function getKontrak()
  {

    return $this->db->query("SELECT * FROM kontrak INNER JOIN karyawan ON karyawan.nik=kontrak.nik ORDER BY karyawan.nik");
  }

  function getKontrakByID()
  {

    $kode_kontrak        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM kontrak INNER JOIN karyawan ON karyawan.nik=kontrak.nik  WHERE kode_kontrak = '$kode_kontrak' ")->row_array();
  }

  function hapusKontrak()
  {

    $kode_kontrak        = $this->uri->segment(3);
    $this->db->query("DELETE FROM kontrak WHERE kode_kontrak = '$kode_kontrak' ");
    redirect('kontrak');
  }

  function insertKontrak()
  {

    $kode_kontrak   = $this->input->post('kode_kontrak');
    $nik            = $this->input->post('nik');
    $awal_kontrak   = $this->input->post('awal_kontrak');
    $akhir_kontrak  = $this->input->post('akhir_kontrak');
    $kontrak_ke     = $this->input->post('kontrak_ke');
    $jenis_kontrak  = $this->input->post('jenis_kontrak');


    $data = array(

      'kode_kontrak'    => $kode_kontrak,
      'nik'             => $nik,
      'awal_kontrak'    => $awal_kontrak,
      'akhir_kontrak'   => $akhir_kontrak,
      'kontrak_ke'      => $kontrak_ke,
      'jenis_kontrak'   => $jenis_kontrak,

    );
    $this->db->insert('kontrak', $data);
    if ($jenis_kontrak != 'JEDA') {
      $this->db->set('status_karyawan', $jenis_kontrak);
      $this->db->where('nik', $nik);
      $this->db->update('karyawan');
    }
    redirect('kontrak');
  }

  function updatekontrak()
  {

    $kode_kontrak   = $this->input->post('kode_kontrak');
    $nik            = $this->input->post('nik');
    $awal_kontrak   = $this->input->post('awal_kontrak');
    $akhir_kontrak  = $this->input->post('akhir_kontrak');
    $kontrak_ke     = $this->input->post('kontrak_ke');
    $jenis_kontrak  = $this->input->post('jenis_kontrak');

    $data = array(

      'kode_kontrak'    => $kode_kontrak,
      'nik'             => $nik,
      'awal_kontrak'    => $awal_kontrak,
      'akhir_kontrak'   => $akhir_kontrak,
      'kontrak_ke'      => $kontrak_ke,
      'jenis_kontrak'   => $jenis_kontrak,

    );
    $this->db->where('kode_kontrak', $kode_kontrak);
    $this->db->update('kontrak', $data);
    
    if ($jenis_kontrak != 'JEDA') {
      $this->db->set('status_karyawan', $jenis_kontrak);
      $this->db->where('nik', $nik);
      $this->db->update('karyawan');
    }
    redirect('kontrak');
  }
}

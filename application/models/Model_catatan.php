<?php

class Model_catatan extends CI_Model
{

  function getCatatan()
  {

    $departemen     = $this->session->userdata('dept');
    $kantor         = $this->session->userdata('kantor');
    return $this->db->query("SELECT * FROM catatan INNER JOIN karyawan ON karyawan.nik = catatan.nik WHERE karyawan.departemen = '$departemen' AND karyawan.kantor = '$kantor' ORDER BY catatan.tanggal DESC");
  }

  function getCatatanByID()
  {

    $kode_catatan        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM catatan INNER JOIN karyawan ON karyawan.nik = catatan.nik WHERE kode_catatan = '$kode_catatan' ")->row_array();
  }

  function hapusCatatan()
  {

    $kode_catatan        = $this->uri->segment(3);
    $this->db->query("DELETE FROM catatan WHERE kode_catatan = '$kode_catatan' ");
    redirect('catatan');
  }

  function insertCatatan()
  {

    $kode_catatan       = $this->input->post('kode_catatan');
    $nik                = $this->input->post('nik');
    $keterangan         = $this->input->post('keterangan');
    $tanggal            = $this->input->post('tanggal');

    $data = array(

      'kode_catatan'        => $kode_catatan,
      'nik'                 => $nik,
      'tanggal'             => $tanggal,
      'keterangan'          => $keterangan,

    );
    $this->db->insert('catatan', $data);
    redirect('catatan');
  }

  function updateCatatan()
  {

    $kode_catatan       = $this->input->post('kode_catatan');
    $nik                = $this->input->post('nik');
    $keterangan         = $this->input->post('keterangan');
    $tanggal            = $this->input->post('tanggal');

    $data = array(

      'kode_catatan'        => $kode_catatan,
      'nik'                 => $nik,
      'tanggal'             => $tanggal,
      'keterangan'          => $keterangan,

    );
    $this->db->where('kode_catatan', $kode_catatan);
    $this->db->update('catatan', $data);
    redirect('catatan');
  }
}

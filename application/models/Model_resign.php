<?php

class Model_resign extends CI_Model
{

  function getResign()
  {

    return $this->db->query("SELECT * FROM resign INNER JOIN karyawan ON karyawan.nik=resign.nik ORDER BY karyawan.nik");
  }

  function getResignByID()
  {

    $kode_resign        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM resign INNER JOIN karyawan ON karyawan.nik=resign.nik  WHERE kode_resign = '$kode_resign' ")->row_array();
  }

  function hapusResign()
  {

    $kode_resign        = $this->uri->segment(3);
    $nik                = $this->uri->segment(4);
    $this->db->query("DELETE FROM resign WHERE kode_resign = '$kode_resign' ");

    $this->db->set('status_aktif', 'Aktif');
    $this->db->where('nik', $nik);
    $this->db->update('karyawan');
    redirect('resign');
  }

  function insertResign()
  {

    $kode_resign        = $this->input->post('kode_resign');
    $nik                = $this->input->post('nik');
    $tanggal            = $this->input->post('tanggal');
    $keterangan         = $this->input->post('keterangan');

    $data = array(

      'kode_resign'       => $kode_resign,
      'nik'               => $nik,
      'tanggal'           => $tanggal,
      'keterangan'        => $keterangan,

    );
    $this->db->insert('resign', $data);

    $this->db->set('status_aktif', 'Tidak Aktif');
    $this->db->where('nik', $nik);
    $this->db->update('karyawan');
    redirect('resign');
  }

  function updateResign()
  {

    $kode_resign        = $this->input->post('kode_resign');
    $nik                = $this->input->post('nik');
    $tanggal            = $this->input->post('tanggal');
    $keterangan         = $this->input->post('keterangan');

    $data = array(

      'kode_resign'       => $kode_resign,
      'nik'               => $nik,
      'tanggal'           => $tanggal,
      'keterangan'        => $keterangan,

    );
    $this->db->where('kode_resign', $kode_resign);
    $this->db->update('resign', $data);

    $this->db->set('status_aktif', 'Tidak Aktif');
    $this->db->where('nik', $nik);
    $this->db->update('karyawan');
    redirect('resign');
  }
}

<?php

class Model_user extends CI_Model
{

  function getUser()
  {

    return $this->db->query("SELECT * FROM akun 
    INNER JOIN karyawan ON karyawan.nik = akun.nik 
    WHERE karyawan.status_aktif = 'Aktif' ORDER BY nama_karyawan");
  }

  function getUserByID()
  {

    $nik        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM akun 
    INNER JOIN karyawan ON karyawan.nik = akun.nik 
    WHERE akun.nik = '$nik' ")->row_array();
  }

  function hapusUser()
  {

    $nik        = $this->uri->segment(3);
    $this->db->query("DELETE FROM akun WHERE nik = '$nik' ");
    redirect('user');
  }

  function updateuser()
  {

    $nik            = $this->input->post('nik');
    $akses_web      = $this->input->post('akses_web');
    $level          = $this->input->post('level');

   $data = array(

      'nik'             => $nik,
      'akses_web'       => $akses_web,
      'level'           => $level,

    );
    $this->db->where('nik', $nik);
    $this->db->update('akun', $data);
    redirect('user');
  }
}

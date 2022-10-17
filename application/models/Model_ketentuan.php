<?php

class Model_ketentuan extends CI_Model
{

  function getKetentuan()
  {

    return $this->db->query("SELECT * FROM ketentuan ORDER BY jabatan ASC");
  }

  function getJabatan()
  {

    return $this->db->query("SELECT jabatan FROM karyawan GROUP BY jabatan ORDER BY jabatan ASC ");
  }


  function getKetentuanByID()
  {

    $kode_ketentuan        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM ketentuan  WHERE kode_ketentuan = '$kode_ketentuan' ")->row_array();
  }

  function hapusKetentuan()
  {

    $kode_ketentuan        = $this->uri->segment(3);
    $this->db->query("DELETE FROM ketentuan WHERE kode_ketentuan = '$kode_ketentuan' ");
    redirect('Ketentuan');
  }

  function insertKetentuan()
  {

    $kode_ketentuan     = $this->input->post('kode_ketentuan');
    $jabatan            = $this->input->post('jabatan');
    $keterangan         = $this->input->post('keterangan');

    $data = array(

      'kode_ketentuan'    => $kode_ketentuan,
      'jabatan'           => $jabatan,
      'keterangan'        => $keterangan,

    );
    $this->db->insert('Ketentuan', $data);
    redirect('Ketentuan');
  }

  function updateKetentuan()
  {

    $kode_ketentuan     = $this->input->post('kode_ketentuan');
    $jabatan            = $this->input->post('jabatan');
    $keterangan         = $this->input->post('keterangan');

    $data = array(

      'kode_ketentuan'    => $kode_ketentuan,
      'jabatan'           => $jabatan,
      'keterangan'        => $keterangan,

    );
    $this->db->where('kode_ketentuan', $kode_ketentuan);
    $this->db->update('Ketentuan', $data);
    redirect('Ketentuan');
  }
}

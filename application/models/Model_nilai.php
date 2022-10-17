<?php

class Model_nilai extends CI_Model
{

  function getNilai()
  {

    return $this->db->query("SELECT * FROM nilai ORDER BY nilai.kode_nilai,kategori_nilai");
  }

  function getNilaiByID()
  {

    $kode_nilai        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM nilai WHERE kode_nilai = '$kode_nilai' ")->row_array();
  }

  function hapusNilai()
  {

    $kode_nilai        = $this->uri->segment(3);
    $this->db->query("DELETE FROM nilai WHERE kode_nilai = '$kode_nilai' ");
    redirect('nilai');
  }

  function insertNilai()
  {

    $kode_nilai       = $this->input->post('kode_nilai');
    $deskripsi        = $this->input->post('deskripsi');
    $kategori_nilai   = $this->input->post('kategori_nilai');


    $data = array(

      'kode_nilai'        => $kode_nilai,
      'deskripsi'         => $deskripsi,
      'kategori_nilai'    => $kategori_nilai,

    );
    $this->db->insert('nilai', $data);
    redirect('nilai');
  }

  function updateNilai()
  {

    $kode_nilai       = $this->input->post('kode_nilai');
    $deskripsi        = $this->input->post('deskripsi');
    $kategori_nilai   = $this->input->post('kategori_nilai');

    $data = array(

      'kode_nilai'        => $kode_nilai,
      'deskripsi'         => $deskripsi,
      'kategori_nilai'    => $kategori_nilai,

    );
    $this->db->where('kode_nilai', $kode_nilai);
    $this->db->update('nilai', $data);
    redirect('nilai');
  }
}

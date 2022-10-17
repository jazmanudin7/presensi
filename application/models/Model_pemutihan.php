<?php

class Model_pemutihan extends CI_Model
{

  function getPemutihan()
  {

    return $this->db->query("SELECT * FROM pemutihan INNER JOIN karyawan ON karyawan.nik=pemutihan.nik ORDER BY karyawan.nik");
  }

  function getPemutihanByID()
  {

    $kode_pemutihan        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM pemutihan INNER JOIN karyawan ON karyawan.nik=pemutihan.nik  WHERE kode_pemutihan = '$kode_pemutihan' ")->row_array();
  }

  function hapusPemutihan()
  {

    $kode_pemutihan        = $this->uri->segment(3);
    $this->db->query("DELETE FROM pemutihan WHERE kode_pemutihan = '$kode_pemutihan' ");
    redirect('pemutihan');
  }

  function insertPemutihan()
  {

    $kode_pemutihan     = $this->input->post('kode_pemutihan');
    $nik                = $this->input->post('nik');
    $tanggal            = $this->input->post('tanggal');
    $nominal            = $this->input->post('nominal');
    $keterangan         = $this->input->post('keterangan');

    $data = array(

      'kode_pemutihan'    => $kode_pemutihan,
      'nik'               => $nik,
      'tanggal'           => $tanggal,
      'nominal'           => $nominal,
      'keterangan'        => $keterangan,

    );
    $this->db->insert('pemutihan', $data);
    redirect('pemutihan');
  }

  function updatepemutihan()
  {

    $kode_pemutihan     = $this->input->post('kode_pemutihan');
    $nik                = $this->input->post('nik');
    $tanggal            = $this->input->post('tanggal');
    $nominal            = $this->input->post('nominal');
    $keterangan         = $this->input->post('keterangan');

    $data = array(

      'kode_pemutihan'    => $kode_pemutihan,
      'nik'               => $nik,
      'tanggal'           => $tanggal,
      'nominal'           => $nominal,
      'keterangan'        => $keterangan,

    );
    $this->db->where('kode_pemutihan', $kode_pemutihan);
    $this->db->update('pemutihan', $data);
    redirect('pemutihan');
  }
}

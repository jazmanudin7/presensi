<?php

class Model_settings extends CI_Model
{

  function getSettings()
  {

    return $this->db->query("SELECT * FROM setting ORDER BY setting.tahun");
  }

  function getSettingsByID()
  {

    $id        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM setting WHERE id = '$id' ")->row_array();
  }

  function hapusSettings()
  {

    $id        = $this->uri->segment(3);
    $this->db->query("DELETE FROM setting WHERE id = '$id' ");
    redirect('settings');
  }

  function insertSettings()
  {


    $id               = $this->input->post('id');
    $tahun            = $this->input->post('tahun');
    $bulan            = $this->input->post('bulan');
    $dari             = $this->input->post('dari');
    $sampai           = $this->input->post('sampai');
    $jumlahHari       = $this->input->post('jumlahHari');
    $jumlahJam        = $this->input->post('jumlahJam');
    $premi2           = $this->input->post('premi2');
    $premi3           = $this->input->post('premi3');

    $data = array(

      'id'          => $id,
      'tahun'       => $tahun,
      'bulan'       => $bulan,
      'dari'        => $dari,
      'sampai'      => $sampai,
      'jumlahHari'  => $jumlahHari,
      'jumlahJam'   => $jumlahJam,
      'premi2'      => $premi2,
      'premi3'      => $premi3,

    );
    $this->db->insert('setting', $data);
    redirect('settings');
  }

  function updateSettings()
  {

    $id               = $this->input->post('id');
    $tahun            = $this->input->post('tahun');
    $bulan            = $this->input->post('bulan');
    $dari             = $this->input->post('dari');
    $sampai           = $this->input->post('sampai');
    $jumlahHari       = $this->input->post('jumlahHari');
    $jumlahJam        = $this->input->post('jumlahJam');
    $premi2           = $this->input->post('premi2');
    $premi3           = $this->input->post('premi3');

    $data = array(

      'tahun'       => $tahun,
      'bulan'       => $bulan,
      'dari'        => $dari,
      'sampai'      => $sampai,
      'jumlahHari'  => $jumlahHari,
      'jumlahJam'   => $jumlahJam,
      'premi2'      => $premi2,
      'premi3'      => $premi3,

    );
    $this->db->where('id', $id);
    $this->db->update('setting', $data);
    redirect('settings');
  }
}

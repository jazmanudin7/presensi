<?php

class Model_lembur extends CI_Model
{

  function getLembur()
  {

    return $this->db->query("SELECT * FROM lembur
    INNER JOIN karyawan ON karyawan.nik = lembur.nik
    ORDER BY tanggal DESC
    ");
  }
  
  function getKaryawanTemp()
  {

    $departemen    = $this->input->post('departemen');
    return $this->db->query("SELECT * FROM karyawan
    WHERE karyawan.nik NOT IN (SELECT nik FROM detail_lembur_temp) AND departemen = '$departemen'
    ORDER BY nama_karyawan
    ");
  }
  
  function getKaryawanDetail()
  {

    $departemen    = $this->input->post('departemen');
    return $this->db->query("SELECT * FROM karyawan
    WHERE karyawan.nik NOT IN (SELECT nik FROM detail_lembur) AND departemen = '$departemen'
    ORDER BY nama_karyawan
    ");
  }
  
  function getDetailKaryawanTemp()
  {

    return $this->db->query("SELECT * FROM detail_lembur_temp
    INNER JOIN karyawan ON karyawan.nik = detail_lembur_temp.nik
    ORDER BY nama_karyawan
    ");
  }
  
  function getDetailKaryawan()
  {

    $kode_lembur    = $this->input->post('kode_lembur');
    return $this->db->query("SELECT * FROM detail_lembur
    INNER JOIN karyawan ON karyawan.nik = detail_lembur.nik
    WHERE detail_lembur.kode_lembur = '$kode_lembur'
    ORDER BY nama_karyawan
    ");
  }

  function getLemburByID()
  {

    $kode_lembur        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM lembur
    INNER JOIN karyawan ON karyawan.nik = lembur.nik
    WHERE kode_lembur = '$kode_lembur' ")->row_array();
  }

  function hapusLembur()
  {

    $kode_lembur        = $this->uri->segment(3);
    $this->db->query("DELETE FROM lembur WHERE kode_lembur = '$kode_lembur' ");
    redirect('Lembur/viewLembur');
  }
  
  function hapusDetailLemburTemp()
  {

    $id        = $this->input->post('id');
    $this->db->query("DELETE FROM detail_lembur_temp WHERE id = '$id' ");
    redirect('Lembur/viewLembur');
  }
  
  function hapusDetailLembur()
  {

    $nik       = $this->input->post('nik');
    $nobukti   = $this->input->post('nobukti');
    return $this->db->query("DELETE FROM detail_lembur WHERE nik = '$nik' AND kode_lembur = '$nobukti' ");
  }
  
  function insertLembur()
  {

    $tahun    = date('y');
    $bulan    = date('m');
    $this->db->select('right(lembur.kode_lembur,3) as kode ', false);
    $this->db->where('mid(kode_lembur,2,2)', $bulan);
    $this->db->where('mid(kode_lembur,4,2)', $tahun);
    $this->db->order_by('kode_lembur', 'desc');
    $this->db->limit('1');
    $query    = $this->db->get('lembur');
    if ($query->num_rows() <> 0) {
      $data   = $query->row();
      $kode   = intval($data->kode) + 1;
    } else {
      $kode   = 1;
    }
    $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodejadi   = "L" . $bulan . "" . $tahun . $kodemax;
    
    $tanggal            = $this->input->post('tanggal');
    $departemen         = $this->input->post('departemen');
    $nik                = $this->input->post('nik');
    $dari               = $this->input->post('dari');
    $sampai             = $this->input->post('sampai');
    $keperluan          = $this->input->post('keperluan');
    $keterangan         = $this->input->post('keterangan');
    $kode_edit          = $this->input->post('kode_edit');
    $jenis_lembur       = $this->input->post('jenis_lembur');

    $data = array(

      'kode_lembur'     => $kodejadi,
      'tanggal'         => $tanggal,
      'departemen'      => $departemen,
      'nik'             => $nik,
      'dari'            => $dari,
      'sampai'          => $sampai,
      'keperluan'       => $keperluan,
      'keterangan'      => $keterangan,
      'jenis_lembur'    => $jenis_lembur,

    );
    $cek = $this->db->insert('lembur', $data);

    redirect('Lembur/viewLembur');
  }


  function updateLembur()
  {

    $kode_lembur        = $this->input->post('kode_lembur');
    $tanggal            = $this->input->post('tanggal');
    $departemen         = $this->input->post('departemen');
    $nik                = $this->input->post('nik');
    $dari               = $this->input->post('dari');
    $sampai             = $this->input->post('sampai');
    $keperluan          = $this->input->post('keperluan');
    $keterangan         = $this->input->post('keterangan');
    $jenis_lembur       = $this->input->post('jenis_lembur');

    $data = array(

      'tanggal'         => $tanggal,
      'departemen'      => $departemen,
      'nik'             => $nik,
      'dari'            => $dari,
      'sampai'          => $sampai,
      'keperluan'       => $keperluan,
      'keterangan'      => $keterangan,
      'jenis_lembur'    => $jenis_lembur,

    );
    $this->db->where('kode_lembur', $kode_lembur);
    $this->db->update('lembur', $data);

    redirect('Lembur/viewLembur');
  }
}

<?php

class Gaji extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_gaji');
  }

  function viewGaji()
  {

    $data['data']       = $this->Model_gaji->getGaji();
    $this->template->load('template', 'gaji/viewGaji', $data);
  }


  function loaddetailgaji()
  {
    $nobukti  = $this->input->post('nobukti');
    $data['karyawan'] = $this->Model_gaji->getGajiKaryawan($nobukti);
    $this->load->view('gaji/viewDetailGaji', $data);
  }

  function simpanGajiPokok()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $gaji_pokok         = str_replace(",", "", $this->input->post('gaji_pokok'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'gaji_pokok'      => $gaji_pokok,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $data, array('nik' => $nik));
  }

  function simpanMasaKerja()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');
    $masa_kerja         = str_replace(",", "", $this->input->post('masa_kerja'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'masa_kerja'      => $masa_kerja,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $data, array('nik' => $nik));
  }

  function simpanTunjanganJabatan()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $tunjangan_jabatan  = str_replace(",", "", $this->input->post('tunjangan_jabatan'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'jabatan'   => $tunjangan_jabatan,
    ];

    $datas = [
      'tunjangan_jabatan'             => $tunjangan_jabatan,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $datas, array('nik' => $nik));
  }

  function simpanTanggungJawab()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $tanggung_jawab     = str_replace(",", "", $this->input->post('tanggung_jawab'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'tanggung_jawab'   => $tanggung_jawab,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $data, array('nik' => $nik));
  }

  function simpanIstri()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $istri              = str_replace(",", "", $this->input->post('istri'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'istri'   => $istri,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $data, array('nik' => $nik));
  }

  function simpanSkillKhusus()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $skill_khusus       = str_replace(",", "", $this->input->post('skill_khusus'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'skill_khusus'   => $skill_khusus,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $data, array('nik' => $nik));
  }

  function simpanMakan()
  {
    $nobukti            = $this->input->post('nobukti');
    $nik                = $this->input->post('nik');
    $makan              = str_replace(",", "", $this->input->post('makan'));
    $bulan              = $this->input->post('bulan');
    $tahun              = $this->input->post('tahun');

    $data = [
      'makan'   => $makan,
    ];


    $this->db->update('detail_gaji', $data, array('nobukti' => $nobukti, 'nik' => $nik, $bulan, $tahun));
    $this->db->update('karyawan', $data, array('nik' => $nik));
  }


  function tabelKaryawan()
  {

    $data['data']       = $this->Model_gaji->getKaryawan();
    $this->load->view('gaji/tabelKaryawan', $data);
  }

  function viewDetailGajiTemp()
  {

    $data['data']       = $this->Model_gaji->getDetailKaryawanTemp();
    $this->load->view('gaji/viewDetailGajiTemp', $data);
  }

  function viewDetailGaji()
  {

    $data['data']       = $this->Model_gaji->getDetailKaryawan();
    $this->load->view('gaji/viewDetailGaji', $data);
  }

  function inputGajiKaryawan()
  {

    $data['data']       = $this->Model_gaji->getDetailGajiKaryawan()->row_array();
    $this->load->view('gaji/inputGajiKaryawan', $data);
  }

  function inputGaji()
  {

    $data['tahun']      = date("Y");
    $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $data['group']      = $this->Model_gaji->getGroup();
    $this->template->load('template', 'gaji/inputGaji', $data);
  }

  function editGaji()
  {

    $data['data']       = $this->Model_gaji->getGajiByID();
    $data['tahun']      = date("Y");
    $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $data['group']      = $this->Model_gaji->getGroup();
    $this->template->load('template', 'gaji/editGaji', $data);
  }

  function insertGaji()
  {
    $this->Model_gaji->insertGaji();
  }

  function hapusDetailGajiTemp()
  {
    $this->Model_gaji->hapusDetailGajiTemp();
  }

  function hapusDetailGaji()
  {
    $this->Model_gaji->hapusDetailGaji();
  }

  function insertGajiTemp()
  {
    $this->Model_gaji->insertGajiTemp();
  }

  function insertDetailGaji()
  {
    $this->Model_gaji->insertDetailGaji();
  }

  function updateGaji()
  {
    $this->Model_gaji->updateGaji();
  }

  function hapusGaji()
  {
    $this->Model_gaji->hapusGaji();
  }
}

<?php

class Settings extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_settings');
  }

  function index()
  {

    $data['data']       = $this->Model_settings->getSettings();
    $this->template->load('template', 'settings/viewSettings', $data);
  }

  function inputSettings()
  {
    $data['tahun']      = date("Y");
    $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $this->template->load('template', 'settings/inputSettings', $data);
  }

  function insertSettings()
  {
    $this->Model_settings->insertSettings();
  }

  function aktifkanLokasi()
  {
    $this->Model_settings->aktifkanLokasi();
    redirect('Settings');
  }

  function editSettings()
  {

    $data['tahun']      = date("Y");
    $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $data['data']       = $this->Model_settings->getSettingsByID();
    $this->template->load('template', 'settings/editSettings', $data);
  }

  function updateSettings()
  {
    $this->Model_settings->updateSettings();
  }

  function hapusSettings()
  {
    $this->Model_settings->hapusSettings();
  }
}

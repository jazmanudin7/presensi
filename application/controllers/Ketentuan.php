<?php

class Ketentuan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_ketentuan');
  }

  function index()
  {

    $data['data']       = $this->Model_ketentuan->getKetentuan();
    $this->template->load('template', 'ketentuan/viewKetentuan', $data);
  }

  function inputKetentuan()
  {

    $data['jabatan']       = $this->Model_ketentuan->getJabatan();
    $this->template->load('template', 'ketentuan/inputKetentuan', $data);
  }

  function insertKetentuan()
  {
    $this->Model_ketentuan->insertKetentuan();
  }

  function aktifkanLokasi()
  {
    $this->Model_ketentuan->aktifkanLokasi();
    redirect('Ketentuan');
  }

  function editKetentuan()
  {

    $data['data']       = $this->Model_ketentuan->getKetentuanByID();
    $data['jabatan']    = $this->Model_ketentuan->getJabatan();
    $this->template->load('template', 'ketentuan/editKetentuan', $data);
  }

  function updateKetentuan()
  {
    $this->Model_ketentuan->updateKetentuan();
  }

  function hapusKetentuan()
  {
    $this->Model_ketentuan->hapusKetentuan();
  }
}

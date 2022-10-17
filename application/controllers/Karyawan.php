<?php

class Karyawan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model(array('Model_karyawan', 'Model_departemen'));
  }

  function index()
  {

    $data['data']       = $this->Model_karyawan->getKaryawan();
    $this->template->load('template', 'karyawan/viewKaryawan', $data);
  }

  function cetakKontrak1()
  {

    $data['data']       = $this->Model_karyawan->getKaryawanByID();
    $this->load->view('karyawan/cetakKontrak1', $data);
  }

  function cetakKontrak2()
  {

    $data['data']       = $this->Model_karyawan->getKaryawanByID();
    $this->load->view('karyawan/cetakKontrak2', $data);
  }

  function inputKaryawan()
  {

    $data['dept']       = $this->Model_departemen->getDepartemen();
    $data['group']      = $this->Model_departemen->getGroup();
    $this->template->load('template', 'karyawan/inputKaryawan', $data);
  }

  function insertKaryawan()
  {
    $this->Model_karyawan->insertKaryawan();
  }

  function editKaryawan()
  {

    $data['data']       = $this->Model_karyawan->getKaryawanByID();
    $this->template->load('template', 'karyawan/editKaryawan', $data);
  }

  function updateKaryawan()
  {
    $this->Model_karyawan->updateKaryawan();
  }

  function hapusKaryawan()
  {
    $this->Model_karyawan->hapusKaryawan();
  }
}

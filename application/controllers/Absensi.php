<?php

class Absensi extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_absensi');
  }

  function index()
  {
      
    $data['data']       = $this->Model_absensi->getAbsensi();
    $this->template->load('template','absensi/viewAbsensi',$data);
  }
  
  function tabelKaryawanTemp()
  {
      
    $data['data']       = $this->Model_absensi->getKaryawanTemp();
    $this->load->view('absensi/tabelKaryawan',$data);
  }

  function inputAbsensi()
  {
      
    $this->template->load('template','absensi/inputAbsensi');
  }

  function editAbsensi()
  {
      
    $data['data']       = $this->Model_absensi->getAbsensiByID();
    $this->template->load('template','absensi/editAbsensi',$data);
  }

  function insertAbsensi()
  {
    $this->Model_absensi->insertAbsensi();
  }
  
  function updateAbsensi()
  {
    $this->Model_absensi->updateAbsensi();
  }

  function hapusAbsensi()
  {
    $this->Model_absensi->hapusAbsensi();
  }
}

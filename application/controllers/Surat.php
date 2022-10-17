<?php

class Surat extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_surat');
  }

  function tabelKaryawan()
  {
      
    $data['data']       = $this->Model_surat->getKaryawan();
    $this->load->view('lembur/tabelKaryawan',$data);
  }
  
  function viewSurat()
  {
      
    $data['data']       = $this->Model_surat->getSurat();
    $this->template->load('template','surat/viewSurat',$data);
  }
  
  function viewSuratDept()
  {
      
    $data['data']       = $this->Model_surat->getSurat();
    $this->template->load('template','surat/viewSurat',$data);
  }

  function viewApprovalSurat()
  {
      
    $data['data']       = $this->Model_surat->getApprovalSurat();
    $this->template->load('template','surat/viewApprovalSurat',$data);
  }

  function inputSurat()
  {
      
    $this->template->load('template','surat/inputSurat');
  }

  function insertSurat()
  {
    $this->Model_surat->insertSurat();
  }

  function acceptSurat()
  {
    $this->Model_surat->acceptSurat();
  }

  function detailSurat()
  {
      
    $data['data']       = $this->Model_surat->getSuratByID();
    $this->template->load('template','surat/detailSurat',$data);
  }

  function editSurat()
  {
      
    $data['data']       = $this->Model_surat->getSuratByID();
    $this->template->load('template','surat/editSurat',$data);
  }

  function updateSurat()
  {
    $this->Model_surat->updateSurat();
  }

  function hapusSurat()
  {
    $this->Model_surat->hapusSurat();
  }
}

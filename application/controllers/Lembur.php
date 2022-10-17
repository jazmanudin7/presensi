<?php

class Lembur extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_lembur');
  }

  function viewLembur()
  {
      
    $data['data']       = $this->Model_lembur->getLembur();
    $this->template->load('template','lembur/viewLembur',$data);
  }
  
  function tabelKaryawanTemp()
  {
      
    $data['data']       = $this->Model_lembur->getKaryawanTemp();
    $this->load->view('lembur/tabelKaryawan',$data);
  }
  
  function tabelKaryawanDetail()
  {
      
    $data['data']       = $this->Model_lembur->getKaryawanDetail();
    $this->load->view('lembur/tabelKaryawan',$data);
  }

  function viewDetailLemburTemp()
  {
      
    $data['data']       = $this->Model_lembur->getDetailKaryawanTemp();
    $this->load->view('lembur/viewDetailLemburTemp',$data);
  }
  
  function viewDetailLembur()
  {
      
    $data['data']       = $this->Model_lembur->getDetailKaryawan();
    $this->load->view('lembur/viewDetailLembur',$data);
  }

  function inputLembur()
  {
      
    $this->template->load('template','lembur/inputLembur');
  }

  function editLembur()
  {
      
    $data['data']       = $this->Model_lembur->getLemburByID();
    $this->template->load('template','lembur/editLembur',$data);
  }

  function insertLembur()
  {
    $this->Model_lembur->insertLembur();
  }
  
  function hapusDetailLemburTemp()
  {
    $this->Model_lembur->hapusDetailLemburTemp();
  }
  
  function hapusDetailLembur()
  {
    $this->Model_lembur->hapusDetailLembur();
  }

  function insertLemburTemp()
  {
    $this->Model_lembur->insertLemburTemp();
  }

  function insertDetailLembur()
  {
    $this->Model_lembur->insertDetailLembur();
  }

  function updateLembur()
  {
    $this->Model_lembur->updateLembur();
  }

  function hapusLembur()
  {
    $this->Model_lembur->hapusLembur();
  }
}

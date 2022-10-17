<?php

class Kontrak extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_kontrak');
  }

  function index()
  {
      
    $data['data']       = $this->Model_kontrak->getKontrak();
    $this->template->load('template','kontrak/viewKontrak',$data);
  }

  function inputKontrak()
  {
      
    $this->template->load('template','kontrak/inputKontrak');
  }

  function insertKontrak()
  {
    $this->Model_kontrak->insertKontrak();
  }

  function aktifkanLokasi()
  {
    $this->Model_kontrak->aktifkanLokasi();
    redirect('Kontrak');
  }

  function editKontrak()
  {
      
    $data['data']       = $this->Model_kontrak->getKontrakByID();
    $this->template->load('template','kontrak/editKontrak',$data);
  }

  function updateKontrak()
  {
    $this->Model_kontrak->updateKontrak();
  }

  function hapusKontrak()
  {
    $this->Model_kontrak->hapusKontrak();
  }
}

<?php

class Sp extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_sp');
  }

  function index()
  {

    $data['data']       = $this->Model_sp->getSP();
    $this->template->load('template', 'sp/viewSP', $data);
  }

  function inputSP()
  {

    $this->template->load('template', 'sp/inputSP');
  }

  function insertSP()
  {
    $this->Model_sp->insertSP();
  }

  function aktifkanLokasi()
  {
    $this->Model_sp->aktifkanLokasi();
    redirect('SP');
  }

  function editSP()
  {

    $data['data']       = $this->Model_sp->getSPByID();
    $this->template->load('template', 'sp/editSP', $data);
  }

  function updateSP()
  {
    $this->Model_sp->updateSP();
  }

  function hapusSP()
  {
    $this->Model_sp->hapusSP();
  }
}

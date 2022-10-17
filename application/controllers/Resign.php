<?php

class Resign extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_resign');
  }

  function index()
  {

    $data['data']       = $this->Model_resign->getResign();
    $this->template->load('template', 'resign/viewResign', $data);
  }

  function inputResign()
  {

    $this->template->load('template', 'resign/inputResign');
  }

  function insertResign()
  {
    $this->Model_resign->insertResign();
  }

  function aktifkanLokasi()
  {
    $this->Model_resign->aktifkanLokasi();
    redirect('Resign');
  }

  function editResign()
  {

    $data['data']       = $this->Model_resign->getResignByID();
    $this->template->load('template', 'resign/editResign', $data);
  }

  function updateResign()
  {
    $this->Model_resign->updateResign();
  }

  function hapusResign()
  {
    $this->Model_resign->hapusResign();
  }
}

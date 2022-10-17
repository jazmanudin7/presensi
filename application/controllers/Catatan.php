<?php

class Catatan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_catatan');
  }

  function index()
  {

    $data['data']       = $this->Model_catatan->getCatatan();
    $this->template->load('template', 'catatan/viewCatatan', $data);
  }

  function inputCatatan()
  {

    $this->template->load('template', 'catatan/inputCatatan');
  }

  function insertCatatan()
  {
    $this->Model_catatan->insertCatatan();
  }

  function editCatatan()
  {

    $data['data']       = $this->Model_catatan->getCatatanByID();
    $this->template->load('template', 'catatan/editCatatan', $data);
  }

  function updateCatatan()
  {
    $this->Model_catatan->updatecatatan();
  }

  function hapusCatatan()
  {
    $this->Model_catatan->hapusCatatan();
  }
}

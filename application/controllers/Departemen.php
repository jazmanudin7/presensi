<?php

class Departemen extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_departemen');
  }

  function index()
  {

    $data['data']       = $this->Model_departemen->getDepartemen();
    $data['datas']      = $this->Model_departemen->getGroup();
    $this->template->load('template', 'departemen/viewDepartemen', $data);
  }

  function inputDepartemen()
  {
    $this->template->load('template', 'departemen/inputDepartemen');
  }

  function insertDepartemen()
  {
    $this->Model_departemen->insertDepartemen();
  }

  function aktifkanLokasi()
  {
    $this->Model_departemen->aktifkanLokasi();
    redirect('Departemen');
  }

  function editDepartemen()
  {

    $data['data']       = $this->Model_departemen->getDepartemenByID();
    $this->template->load('template', 'departemen/editDepartemen', $data);
  }

  function updateDepartemen()
  {
    $this->Model_departemen->updateDepartemen();
  }

  function hapusDepartemen()
  {
    $this->Model_departemen->hapusDepartemen();
  }

  function hapusGroup()
  {
    $this->Model_departemen->hapusGroup();
  }
}

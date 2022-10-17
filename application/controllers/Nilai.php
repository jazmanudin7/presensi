<?php

class Nilai extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_nilai');
  }

  function index()
  {

    $data['data']       = $this->Model_nilai->getNilai();
    $this->template->load('template', 'nilai/viewNilai', $data);
  }

  function inputNilai()
  {

    $this->template->load('template', 'nilai/inputNilai');
  }

  function insertNilai()
  {
    $this->Model_nilai->insertNilai();
  }

  function editNilai()
  {

    $data['data']       = $this->Model_nilai->getNilaiByID();
    $this->template->load('template', 'nilai/editNilai', $data);
  }

  function updateNilai()
  {
    $this->Model_nilai->updateNilai();
  }

  function hapusNilai()
  {
    $this->Model_nilai->hapusNilai();
  }
}

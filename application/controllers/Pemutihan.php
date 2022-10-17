<?php

class Pemutihan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_pemutihan');
  }

  function index()
  {

    $data['data']       = $this->Model_pemutihan->getPemutihan();
    $this->template->load('template', 'pemutihan/viewPemutihan', $data);
  }

  function inputPemutihan()
  {

    $this->template->load('template', 'pemutihan/inputPemutihan');
  }

  function insertPemutihan()
  {
    $this->Model_pemutihan->insertPemutihan();
  }

  function aktifkanLokasi()
  {
    $this->Model_pemutihan->aktifkanLokasi();
    redirect('Pemutihan');
  }

  function editPemutihan()
  {

    $data['data']       = $this->Model_pemutihan->getPemutihanByID();
    $this->template->load('template', 'pemutihan/editPemutihan', $data);
  }

  function updatePemutihan()
  {
    $this->Model_pemutihan->updatePemutihan();
  }

  function hapusPemutihan()
  {
    $this->Model_pemutihan->hapusPemutihan();
  }
}

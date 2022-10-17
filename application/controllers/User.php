<?php

class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model(array('Model_user'));
  }

  function index()
  {

    $data['data']       = $this->Model_user->getUser();
    $this->template->load('template', 'user/viewUser', $data);
  }

  function inputUser()
  {

    $this->template->load('template', 'user/inputUser');
  }

  function insertUser()
  {
    $this->Model_user->insertuser();
  }

  function editUser()
  {

    $data['data']       = $this->Model_user->getUserByID();
    $this->template->load('template', 'user/editUser', $data);
  }

  function updateUser()
  {
    $this->Model_user->updateUser();
  }

  function hapusUser()
  {
    $this->Model_user->hapusUser();
  }
}

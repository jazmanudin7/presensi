<?php

class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->Model('Model_dashboard');
  }

  function view_dashboard()
  {
    $this->template->load('template','dashboard/view_dashboard');
  }

}

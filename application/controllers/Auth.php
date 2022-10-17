<?php

class Auth extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->Model('Model_auth');
  }

  function login()
  {
    check_log();
    if (isset($_POST['submit'])) {
      $email       = $this->input->post('email');
      $password    = $this->input->post('password');
      $user        = $this->Model_auth->cek_user($email, $password);
      $cek_user    = $user->num_rows();
      $data_user   = $user->row_array();

      if ($cek_user != 0) {

        $data_session = array(

          'nik'             => $data_user['nik'],
          'email'           => $data_user['email'],
          'shift'           => $data_user['shift'],
          'nama_lengkap'    => $data_user['nama_karyawan'],
          'group'           => $data_user['group'],
          'dept'            => $data_user['departemen'],
          'kantor'          => $data_user['kantor'],
          'departemen'      => $data_user['head_dept'],
          'akses_web'       => $data_user['akses_web'],
          'jabatan'         => $data_user['jabatan'],
          'level'           => $data_user['level'],
        );
        $this->session->set_userdata($data_session);
        redirect('dashboard/view_dashboard');
      } else {
        redirect('auth/login');
      }
    } else {

      $this->load->view('auth/login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('dashboard/view_dashboard');
  }
}

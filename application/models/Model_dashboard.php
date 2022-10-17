<?php

class Model_dashboard extends CI_Model{

    function cek_user($email=null,$password=null){

      return $this->db->query("SELECT * FROM akun
      WHERE email = '$email'  AND password = '$password' ");

    }
}

<?php

class Model_auth extends CI_Model
{

  function cek_user($email = null, $password = null)
  {

    return $this->db->query("SELECT *,akun.nik FROM akun
    INNER JOIN karyawan ON karyawan.nik = akun.nik
    WHERE email = '$email'  AND password = '$password' AND akses_web = '1' OR akses_web = '2'  ");
  }
}

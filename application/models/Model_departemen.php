<?php

class Model_departemen extends CI_Model
{

  function getDepartemen()
  {

    return $this->db->query("SELECT * FROM departemen ");
  }

  function getGroup()
  {

    return $this->db->query("SELECT * FROM groups");
  }

  function hapusDepartemen()
  {

    $kode_dept        = $this->uri->segment(3);
    $this->db->query("DELETE FROM departemen WHERE kode_dept = '$kode_dept' ");
    redirect('Departemen');
  }

  function hapusGroup()
  {

    $kode_group        = $this->uri->segment(3);
    $this->db->query("DELETE FROM groups WHERE kode_group = '$kode_group' ");
    redirect('Departemen');
  }
  function insertDepartemen()
  {


    $departemen           = $this->input->post('departemen');
    $jenis_input          = $this->input->post('jenis_input');

    if ($jenis_input == 'Group') {

      $data = array(

        'kode_group'       => $departemen,
        'nama_group'       => $departemen,

      );
      $this->db->insert('groups', $data);
    } else {

      $data = array(

        'kode_dept'       => $departemen,
        'nama_dept'       => $departemen,

      );
      $this->db->insert('departemen', $data);
    }
    redirect('Departemen');
  }
}

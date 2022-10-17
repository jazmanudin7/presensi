<?php

class Model_karyawan extends CI_Model
{

  function getKaryawan()
  {

    return $this->db->query("SELECT * FROM karyawan WHERE karyawan.group != 'Unit 1' ORDER BY nama_karyawan");
  }

  function getKaryawanByID()
  {

    $nik        = $this->uri->segment(3);
    return $this->db->query("SELECT * FROM karyawan WHERE nik = '$nik' ")->row_array();
  }

  function hapusKaryawan()
  {

    $nik        = $this->uri->segment(3);
    $this->db->query("DELETE FROM karyawan WHERE nik = '$nik' ");
    redirect('karyawan');
  }

  function insertKaryawan()
  {

    $nik            = $this->input->post('nik');
    $nama_karyawan  = $this->input->post('nama_karyawan');
    $departemen     = $this->input->post('departemen');
    $tgl_masuk      = $this->input->post('tgl_masuk');
    $group          = $this->input->post('group');
    $jabatan        = $this->input->post('jabatan');
    $kantor         = $this->input->post('kantor');
    $perusahaan     = $this->input->post('perusahaan');
    $jk             = $this->input->post('jk');
    $status_kawin   = $this->input->post('status_kawin');
    $status_karyawan = $this->input->post('status_karyawan');
    $pendidikan     = $this->input->post('pendidikan');
    $tempat_lahir   = $this->input->post('tempat_lahir');
    $tgl_lahir      = $this->input->post('tgl_lahir');
    $tgl_masuk      = $this->input->post('tgl_masuk');
    $nik_ktp        = $this->input->post('nik_ktp');
    $alamat         = $this->input->post('alamat');
    $no_hp          = $this->input->post('no_hp');
    $iso            = $this->input->post('iso');
    $berkas         = $this->input->post('berkas');

    $data = array(

      'nik'             => $nik,
      'nama_karyawan'   => $nama_karyawan,
      'tgl_masuk'       => $tgl_masuk,
      'departemen'      => $departemen,
      'group'           => $group,
      'jabatan'         => $jabatan,
      'kantor'          => $kantor,
      'perusahaan'      => $perusahaan,
      'jk'              => $jk,
      'status_kawin'    => $status_kawin,
      'status_karyawan' => $status_karyawan,
      'pendidikan'      => $pendidikan,
      'tempat_lahir'    => $tempat_lahir,
      'tgl_lahir'       => $tgl_lahir,
      'tgl_masuk'       => $tgl_masuk,
      'nik_ktp'         => $nik_ktp,
      'alamat'          => $alamat,
      'no_hp'           => $no_hp,
      'iso'             => $iso,
      'berkas'          => $berkas,
      'status_aktif'    => 'Aktif',

    );
    $this->db->insert('karyawan', $data);
    redirect('karyawan');
  }

  function updateKaryawan()
  {

    $nik            = $this->input->post('nik');
    $nama_karyawan  = $this->input->post('nama_karyawan');
    $departemen     = $this->input->post('departemen');
    $tgl_masuk      = $this->input->post('tgl_masuk');
    $group          = $this->input->post('group');
    $jabatan        = $this->input->post('jabatan');
    $kantor         = $this->input->post('kantor');
    $perusahaan     = $this->input->post('perusahaan');
    $jk             = $this->input->post('jk');
    $status_kawin   = $this->input->post('status_kawin');
    $status_karyawan = $this->input->post('status_karyawan');
    $pendidikan     = $this->input->post('pendidikan');
    $tempat_lahir   = $this->input->post('tempat_lahir');
    $tgl_lahir      = $this->input->post('tgl_lahir');
    $tgl_masuk      = $this->input->post('tgl_masuk');
    $nik_ktp        = $this->input->post('nik_ktp');
    $alamat         = $this->input->post('alamat');
    $no_hp          = $this->input->post('no_hp');
    $iso            = $this->input->post('iso');
    $berkas         = $this->input->post('berkas');

    $data = array(

      'nama_karyawan'   => $nama_karyawan,
      'departemen'      => $departemen,
      'group'           => $group,
      'tgl_masuk'       => $tgl_masuk,
      'jabatan'         => $jabatan,
      'kantor'          => $kantor,
      'perusahaan'      => $perusahaan,
      'jk'              => $jk,
      'status_kawin'    => $status_kawin,
      'status_karyawan' => $status_karyawan,
      'pendidikan'      => $pendidikan,
      'tempat_lahir'    => $tempat_lahir,
      'tgl_lahir'       => $tgl_lahir,
      'tgl_masuk'       => $tgl_masuk,
      'nik_ktp'         => $nik_ktp,
      'alamat'          => $alamat,
      'no_hp'           => $no_hp,
      'iso'             => $iso,
      'berkas'          => $berkas,

    );
    $this->db->where('nik', $nik);
    $this->db->update('karyawan', $data);
    redirect('karyawan');
  }
}

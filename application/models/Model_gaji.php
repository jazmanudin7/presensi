<?php

class Model_gaji extends CI_Model
{

    function getGroup()
    {

        return $this->db->query("SELECT karyawan.group FROM karyawan WHERE karyawan.group != '' GROUP BY karyawan.group ORDER BY karyawan.group ASC ");
    }

    function getGaji()
    {

        return $this->db->query("SELECT * FROM gaji
        ORDER BY tahun,bulan DESC
        ");
    }

    function getGajiKaryawan($nobukti)
    {

        return $this->db->query("SELECT detail_gaji.nobukti,karyawan.nik,nama_karyawan,departemen,karyawan.group,detail_gaji.gaji_pokok,detail_gaji.makan,detail_gaji.masa_kerja,detail_gaji.tanggung_jawab,detail_gaji.jabatan,detail_gaji.istri,detail_gaji.skill_khusus FROM detail_gaji
        INNER JOIN karyawan ON detail_gaji.nik = karyawan.nik
        WHERE detail_gaji.nobukti = '$nobukti'
        ORDER BY nama_karyawan ASC
        ");
    }


    function getDetailKaryawan()
    {

        $nobukti    = $this->input->post('nobukti');
        return $this->db->query("SELECT * FROM detail_gaji
        INNER JOIN karyawan ON karyawan.nik = detail_gaji.nik
        WHERE detail_gaji.nobukti = '$nobukti'
        ORDER BY nama_karyawan
        ");
    }

    function getGajiByID()
    {

        $nobukti        = $this->uri->segment(3);
        return $this->db->query("SELECT * FROM gaji WHERE nobukti = '$nobukti' ")->row_array();
    }

    function hapusGaji()
    {

        $nobukti        = $this->uri->segment(3);
        $this->db->query("DELETE FROM gaji WHERE nobukti = '$nobukti' ");
        $this->db->query("DELETE FROM detail_gaji WHERE nobukti = '$nobukti' ");
        redirect('Gaji/viewGaji');
    }

    function insertGaji()
    {

        $tahun    = date('y');
        $bulan    = date('m');
        $this->db->select('right(gaji.nobukti,3) as kode ', false);
        $this->db->where('mid(nobukti,2,2)', $bulan);
        $this->db->where('mid(nobukti,4,2)', $tahun);
        $this->db->order_by('nobukti', 'desc');
        $this->db->limit('1');
        $query    = $this->db->get('gaji');
        if ($query->num_rows() <> 0) {
            $data   = $query->row();
            $kode   = intval($data->kode) + 1;
        } else {
            $kode   = 1;
        }
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi   = "G" . $bulan . "" . $tahun . $kodemax;

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');

        $data = array(

            'nobukti'         => $kodejadi,
            'bulan'           => $bulan,
            'tahun'           => $tahun,

        );
        $this->db->insert('gaji', $data);

        $karyawan  = $this->db->query("SELECT * FROM karyawan ")->result();
        foreach ($karyawan as $k) {

            $data = array(

                'nobukti'             => $kodejadi,
                'nik'                 => $k->nik,
                'gaji_pokok'          => $k->gaji_pokok,
                'masa_kerja'          => $k->masa_kerja,
                'tanggung_jawab'      => $k->tanggung_jawab,
                'jabatan'             => $k->tunjangan_jabatan,
                'skill_khusus'        => $k->skill_khusus,
                'istri'               => $k->istri,
                'makan'               => $k->makan,

            );

            $this->db->insert('detail_gaji', $data);
        }

        redirect('Gaji/viewGaji');
    }

    function updateGaji()
    {

        $nobukti            = $this->input->post('nobukti');
        $tanggal            = $this->input->post('tanggal');
        $departemen         = $this->input->post('departemen');

        $data = array(

            'tanggal'         => $tanggal,
            'departemen'      => $departemen,

        );
        $this->db->where('nobukti', $nobukti);
        $this->db->update('gaji', $data);
        redirect('Gaji/viewGaji');
    }
}

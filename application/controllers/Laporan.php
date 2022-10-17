<?php

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->Model(array('Model_laporan'));
    }

    function getGroup()
    {
        $departemen = $this->input->post('departemen');
        $group      = $this->Model_laporan->getGroup($departemen)->result();

        echo "<option value='' selected>SEMUA GROUP</option>";
        foreach ($group as $g) {
            echo "<option value='$g->group'>$g->group</option>";
        }
    }

    function getKantor()
    {
        $group      = $this->input->post('group');
        $kantor     = $this->Model_laporan->getKantor($group)->result();

        echo "<option value='' selected>SEMUA KANTOR</option>";
        foreach ($kantor as $g) {
            echo "<option value='$g->kantor'>$g->kantor</option>";
        }
    }

    function laporanKaryawanResign()
    {

        $data['tahun']          = date("Y");
        $data['bulan']          = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['departemen']     = $this->Model_laporan->getDepartemen();
        $this->template->load('template', 'laporan/laporanKaryawanResign', $data);
    }

    function cetakKaryawanResign()
    {

        $departemen             = $this->input->post('departemen');
        $bulan                  = $this->input->post('bulan');
        $tahun                  = $this->input->post('tahun');
        $data['tahun']          = $tahun;
        $data['bulan']          = $bulan;
        $data['data']           = $this->Model_laporan->getListKaryawanResign($departemen, $bulan, $tahun)->result();
        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-DiResignosition: attachment; filename=Laporan Resign Karyawan.xls");
        }
        $this->load->view('laporan/cetakKaryawanResign', $data);
    }

    function laporanKaryawanSp()
    {
        $data['group']          = $this->Model_laporan->getGroup();
        $data['kantor']         = $this->Model_laporan->getKantor();
        $data['departemen']     = $this->Model_laporan->getDepartemen();
        $data['karyawan']       = $this->Model_laporan->getKaryawan();
        $this->template->load('template', 'laporan/laporanKaryawanSp', $data);
    }

    function cetakKaryawanSp()
    {

        $nik                    = $this->input->post('nik');
        $group                  = $this->input->post('group');
        $kantor                 = $this->input->post('kantor');
        $departemen             = $this->input->post('departemen');
        $data['data']           = $this->Model_laporan->getListKaryawan($nik, $group, $kantor, $departemen)->result();
        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan SP Karyawan.xls");
        }
        $this->load->view('laporan/cetakKaryawanSp', $data);
    }

    function laporanKaryawanPemutihan()
    {
        $data['group']          = $this->Model_laporan->getGroup();
        $data['kantor']         = $this->Model_laporan->getKantor();
        $data['departemen']     = $this->Model_laporan->getDepartemen();
        $data['karyawan']       = $this->Model_laporan->getKaryawan();
        $this->template->load('template', 'laporan/laporanKaryawanPemutihan', $data);
    }

    function cetakKaryawanPemutihan()
    {

        $nik                    = $this->input->post('nik');
        $group                  = $this->input->post('group');
        $kantor                 = $this->input->post('kantor');
        $departemen             = $this->input->post('departemen');
        $data['data']           = $this->Model_laporan->getListKaryawan($nik, $group, $kantor, $departemen)->result();
        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Karyawan.xls");
        }
        $this->load->view('laporan/cetakKaryawanPemutihan', $data);
    }

    function laporanKaryawanKontrak()
    {
        $data['group']          = $this->Model_laporan->getGroup();
        $data['kantor']         = $this->Model_laporan->getKantor();
        $data['departemen']     = $this->Model_laporan->getDepartemen();
        $data['karyawan']       = $this->Model_laporan->getKaryawan();
        $this->template->load('template', 'laporan/laporanKaryawanKontrak', $data);
    }

    function cetakKaryawanKontrak()
    {

        $nik                    = $this->input->post('nik');
        $group                  = $this->input->post('group');
        $kantor                 = $this->input->post('kantor');
        $departemen             = $this->input->post('departemen');
        $data['data']           = $this->Model_laporan->getListKaryawan($nik, $group, $kantor, $departemen)->result();
        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Karyawan.xls");
        }
        $this->load->view('laporan/cetakKaryawanKontrak', $data);
    }

    function laporanKaryawan()
    {
        $data['group']          = $this->Model_laporan->getGroup();
        $data['kantor']         = $this->Model_laporan->getKantor();
        $data['departemen']     = $this->Model_laporan->getDepartemen();
        $data['karyawan']       = $this->Model_laporan->getKaryawan();
        $this->template->load('template', 'laporan/laporanKaryawan', $data);
    }

    function cetakKaryawan()
    {

        $nik                    = $this->input->post('nik');
        $group                  = $this->input->post('group');
        $kantor                 = $this->input->post('kantor');
        $departemen             = $this->input->post('departemen');
        $data['data']           = $this->Model_laporan->getListKaryawan($nik, $group, $kantor, $departemen)->result();
        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Karyawan.xls");
        }
        $this->load->view('laporan/cetakKaryawan', $data);
    }

    function laporanDetailLembur()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']       = $this->Model_laporan->getGroup();
        $this->template->load('template', 'laporan/laporanDetailLembur', $data);
    }

    function cetakDetailLembur()
    {

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['data']       = $this->Model_laporan->getDetailLembur($bulan, $tahun, $group)->result();
        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Detail Lembur Karyawan.xls");
        }
        $this->load->view('laporan/cetakDetailLembur', $data);
    }

    function laporanRekapAbsensi()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']       = $this->Model_laporan->getGroup();
        $this->template->load('template', 'laporan/laporanRekapAbsensi', $data);
    }

    function cetakRekapAbsensi()
    {

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['data']       = $this->Model_laporan->getRekapAbsensi($bulan, $tahun, $group)->result();

        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Rekap Presensi Karyawan.xls");
        }
        $this->load->view('laporan/cetakRekapAbsensi', $data);
    }

    function cetakAbsensiPerDepartemen()
    {

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['data']       = $this->Model_laporan->getAbsensiPerDepartemen($bulan, $tahun)->result();

        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Presensi Karyawan.xls");
        }
        $this->load->view('laporan/cetakAbsensiPerDepartemen', $data);
    }

    function laporanAbsensiPerDepartemen()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $this->template->load('template', 'laporan/laporanAbsensiPerDepartemen', $data);
    }

    function cetakAbsensiJamKerja()
    {

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $kantor             = $this->input->post('kantor');
        $departemen         = $this->input->post('departemen');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['departemen'] = $departemen;
        $data['data']       = $this->Model_laporan->getAbsensiJamKerja($bulan, $tahun, $group, $kantor, $departemen)->result();

        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Absensi Jam Kerja.xls");
        }
        $this->load->view('laporan/cetakAbsensiJamKerja', $data);
    }

    function laporanAbsensiJamKerja()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']      = $this->Model_laporan->getGroup();
        $data['kantor']     = $this->Model_laporan->getKantor();
        $data['departemen'] = $this->Model_laporan->getDepartemen();
        $this->template->load('template', 'laporan/laporanAbsensiJamKerja', $data);
    }

    function cetakAbsensiLembur()
    {

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $kantor             = $this->input->post('kantor');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['data']       = $this->Model_laporan->getAbsensiLembur($bulan, $tahun, $group, $kantor)->result();

        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Absensi Lembur.xls");
        }
        $this->load->view('laporan/cetakAbsensiLembur', $data);
    }

    function laporanAbsensiLembur()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']      = $this->Model_laporan->getGroup();
        $data['kantor']     = $this->Model_laporan->getKantor();
        $this->template->load('template', 'laporan/laporanAbsensiLembur', $data);
    }

    function laporanRekapTahunan()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']      = $this->Model_laporan->getGroup();
        $data['departemen'] = $this->Model_laporan->getDepartemen();
        $data['kantor']     = $this->Model_laporan->getKantor();
        $this->template->load('template', 'laporan/laporanRekapTahunan', $data);
    }

    function cetakAbsensiTahunan()
    {

        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $departemen         = $this->input->post('departemen');
        $kantor             = $this->input->post('kantor');
        $data['tahun']      = $tahun;
        $data['data']       = $this->Model_laporan->getRekapTahunan($tahun, $group, $departemen, $kantor)->result();

        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Rekap Absensi Karyawan Tahunan.xls");
        }
        $this->load->view('laporan/cetakAbsensiTahunan', $data);
    }

    function laporanDetailAbsensi()
    {
        $data['group']      = $this->Model_laporan->getGroup();
        $data['departemen'] = $this->Model_laporan->getDepartemen();
        $data['kantor']     = $this->Model_laporan->getKantor();
        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']       = $this->Model_laporan->getGroup();
        $this->template->load('template', 'laporan/laporanDetailAbsensi', $data);
    }

    function cetakDetailAbsensi()
    {

        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $departemen         = $this->input->post('departemen');
        $kantor             = $this->input->post('kantor');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['kantor']     = $kantor;
        $data['departemen'] = $departemen;
        $data['group']      = $group;
        $data['data']       = $this->Model_laporan->getDetailAbsensi($bulan, $tahun,  $group, $kantor, $departemen)->result();

        if (isset($_POST['export'])) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Detail Absensi Karyawan.xls");
        }
        $this->load->view('laporan/cetakDetailAbsensi', $data);
    }

    function laporanAbsensiKaryawan()
    {

        $data['tahun']      = date("Y");
        $data['bulan']      = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $data['group']       = $this->Model_laporan->getGroup();
        $this->template->load('template', 'laporan/laporanAbsensiKaryawan', $data);
    }

    function cetakAbsensiKaryawan()
    {

        $jenis_laporan      = $this->input->post('jenis_laporan');
        $bulan              = $this->input->post('bulan');
        $tahun              = $this->input->post('tahun');
        $group              = $this->input->post('group');
        $data['tahun']      = $tahun;
        $data['bulan']      = $bulan;
        $data['data']       = $this->Model_laporan->getAbsensiKaryawan($bulan, $tahun, $group)->result();

        if ($jenis_laporan == 'Rekap Jam Kerja') {
            if (isset($_POST['export'])) {
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Laporan Absensi Karyawan (Jam Kerja).xls");
            }
            $this->load->view('laporan/cetakAbsensiJamKerja', $data);
        } else if ($jenis_laporan == 'Rekap Absensi') {
            if (isset($_POST['export'])) {
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Laporan Rekap Absensi Karyawan.xls");
            }
            $this->load->view('laporan/cetakAbsensiKaryawan', $data);
        } else if ($jenis_laporan == 'Detail Absensi') {
            if (isset($_POST['export'])) {
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Laporan Detail Absensi Karyawan.xls");
            }
            $this->load->view('laporan/cetakDetailAbsensi', $data);
        } else if ($jenis_laporan == 'Rekap Absensi Tahunan') {
            if (isset($_POST['export'])) {
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Laporan Detail Absensi Karyawan Tahunan.xls");
            }
            $this->load->view('laporan/cetakAbsensiTahunan', $data);
        }
    }
}

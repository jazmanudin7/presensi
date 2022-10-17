<?php

function check_login()
{

    $CI             = &get_instance();
    $email          = $CI->session->userdata('email');

    if (empty($email)) {

        redirect('auth/login');
    }
}


function check_log()
{

    $CI         = &get_instance();
    $session    = $CI->session->userdata('email');
    if (!empty($session)) {
        redirect('dashboard/view_dashboard');
    }
}


function DateToIndo($date)
{
    $BulanIndo = array(
        "Januari", "Februari", "Maret",
        "April", "Mei", "Juni",
        "Juli", "Agustus", "September",
        "Oktober", "November", "Desember"
    );

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);

    $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
    return ($result);
}

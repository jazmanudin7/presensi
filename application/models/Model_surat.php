<?php

class Model_surat extends CI_Model
    {
    
    function getKaryawan()
    {
    
     $level             = $this->session->userdata('level');
        $departemen     = $this->session->userdata('dept');
        $kantor         = $this->session->userdata('kantor');
        if($level == "ADMIN"){
            return $this->db->query("SELECT * FROM karyawan WHERE karyawan.departemen = '$departemen' AND karyawan.kantor = '$kantor' ORDER BY departemen,nama_karyawan");
        }else{
            
            return $this->db->query("SELECT * FROM karyawan ORDER BY departemen,nama_karyawan");
        }
    }
    
    function getSurat()
    {
        $level          = $this->session->userdata('level');
        $departemen     = $this->session->userdata('dept');
        $kantor         = $this->session->userdata('kantor');
        if($level == "ADMIN"){
            return $this->db->query("SELECT * FROM surat_izin INNER JOIN karyawan ON karyawan.nik = surat_izin.nik WHERE karyawan.departemen = '$departemen' AND karyawan.kantor = '$kantor' ORDER BY tanggal DESC");
        }else{
            return $this->db->query("SELECT * FROM surat_izin INNER JOIN karyawan ON karyawan.nik = surat_izin.nik ORDER BY tanggal DESC");
        }
    }
    
    function getApprovalSurat()
    {
        $departemen         = $this->session->userdata('departemen');
        $nik                = $this->session->userdata('nik');
        if($nik != '14.06.035' AND $nik != '21.12.12'){
            $departemen     = "WHERE karyawan.approval = '".$departemen."' ";
        }else if($departemen == '-'){
            $departemen     = "WHERE surat_izin.head_dept = 'Diterima' OR surat_izin.head_dept = 'Ditolak' ";
        }else{
            $departemen     = "";
        }
        
        return $this->db->query("SELECT * FROM surat_izin INNER JOIN karyawan ON karyawan.nik = surat_izin.nik
        "
        .$departemen
        ." ORDER BY surat_izin.tanggal DESC");
    }
    
    function getSuratByID()
    {
    
        $kode_surat        = $this->uri->segment(3);
        return $this->db->query("SELECT * FROM surat_izin 
        INNER JOIN karyawan ON karyawan.nik = surat_izin.nik
        WHERE kode_surat = '$kode_surat' ")->row_array();
    }
    
    function hapusSurat()
    {
    
        $kode_surat        = $this->uri->segment(3);
        $this->db->query("DELETE FROM surat_izin WHERE kode_surat = '$kode_surat' ");
        redirect('surat/viewSurat');
    }
    
    function insertSurat()
    {
    
        $nik            = $this->input->post('nik');
        $dari           = $this->input->post('dari');
        $sampai         = $this->input->post('sampai');
        $judul          = $this->input->post('judul');
        $isi            = $this->input->post('isi');
        $jenis_surat    = $this->input->post('jenis_surat');
    
    
        if($jenis_surat == 'Izin Tidak Masuk Kerja'){
        
            while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Izin', '$isi', '', 'Izin Tidak Masuk Kerja', '', '', '' )");
               
             $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
            
        }else if($jenis_surat == 'Izin Kepentingan Pribadi (Sebentar)'){
            
            $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Izin', '$isi', '', 'Izin Kepentingan Pribadi (Sebentar)', '', '', '' )");
          
        }else if($jenis_surat == 'Izin Kepentingan Pribadi (Pulang)'){
            
            $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Izin', '$isi', '', 'Izin Kepentingan Pribadi (Pulang)', '', '', '' )");
    
        }else if($jenis_surat == 'Izin Kepentingan Kantor'){
        
             while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Izin', '$isi', '', 'Izin Kepentingan Kantor', '', '', '' )");
               
             $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
            
        }else if($jenis_surat == 'Sakit (Pulang)'){
            
            $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Sakit', '$isi', '', 'Sakit (Pulang)', '', '', '' )");
            
            
        }else if($jenis_surat == 'Sakit Tanpa SID'){
            
            while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Sakit', '$isi', '', 'Sakit Tanpa SID', '', '', '' )");
                
                $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
            
        }else if($jenis_surat == 'Sakit Dengan SID'){
            
            while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'SID', '$isi', '', 'Sakit Dengan SID', '', '', '' )");
                
                $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
            
        }else if($jenis_surat == 'Cuti Tahunan'){
            
            while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Cuti', '$isi', '', 'Cuti Tahunan', '', '', '' )");
                
                $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
            
        }else if($jenis_surat == 'Cuti Melahirkan/Keguguran'){
            
            while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Cuti', '$isi', '', 'Cuti Melahirkan/Keguguran', '', '', '' )");
                
                $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
            
        }else if($jenis_surat == 'Cuti Khusus Sesuai (PP)'){
            
            while (strtotime($dari) <= strtotime($sampai)) {
                
                $this->db->query("INSERT INTO surat_izin (nik, judul, tanggal, keterangan, isi, foto, jenis_izin, head_dept, hrd, security) VALUES ('$nik', '$judul', '$dari', 'Cuti', '$isi', '', 'Cuti Khusus Sesuai (PP)', '', '', '' )");
               
                $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
            }
        }
    
        redirect('surat/viewSurat');
    } 

    
    function updateSurat()
    {
    
        $kode_surat     = $this->input->post('kode_surat');
        $nik            = $this->input->post('nik');
        $tanggal        = $this->input->post('tanggal');
        $judul          = $this->input->post('judul');
        $isi            = $this->input->post('isi');
        $jenis_surat    = $this->input->post('jenis_surat');
        
        $data = array(
        
            'nik'             => $nik,
            'tanggal'         => $tanggal,
            'judul'           => $judul,
            'isi'             => $isi,
            'jenis_izin'      => $jenis_surat,
        
        );
        $this->db->where('kode_surat', $kode_surat);
        $this->db->update('surat_izin', $data);
        redirect('surat/viewSurat');
    }
    
    function acceptSurat()
    {
    
        $kode_surat     = $this->uri->segment(3);
        $status         = $this->uri->segment(4);
        $keterangan     = $this->uri->segment(5);
        if($status == 'Batal'){
            $status     = '';
        }else{
            $status     = $status;
        }
        if($keterangan == 'HeadDept'){
            
            $data = array(
            
                'head_dept'      => $status,
            
            ); 
            $this->db->where('kode_surat', $kode_surat);
            $this->db->update('surat_izin', $data);
        }else if($keterangan == 'HRD'){

            $data = array(
            
                'hrd'      => $status,
            
            ); 
            $this->db->where('kode_surat', $kode_surat);
            $this->db->update('surat_izin', $data);
        }else if($keterangan == 'Security'){

            $data = array(
            
                'security'      => $status,
            
            ); 
            $this->db->where('kode_surat', $kode_surat);
            $this->db->update('surat_izin', $data);
        }
        redirect('surat/viewApprovalSurat');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginpemohon extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->model('M_login');
		error_reporting(0);
    }

    public function index()
    {
		$kodeakses	= $this->session->userdata('kodeakses');
		$ktp		= $this->session->userdata('ktp');

		if((empty($kodeakses)) AND (empty($ktp))) {
			$this->load->view('_frontend/login');
		}
		else {
			redirect('pemohon');
		}
        
	}

    function aksi_login()
    {
		$ktp        = $this->input->post('ktp');
		$notelp     = $this->input->post('notelp');
		$cek 		= $this->M_login->cek_login_pemohon($ktp,$notelp);
		if($cek!==FALSE) {
			$this->session->set_userdata('id', $cek['id']);
			$this->session->set_userdata('nama', $cek['nama']);
			$this->session->set_userdata('ktp', $cek['ktp']);
			$this->session->set_userdata('notelp', $cek['notelp']);
			$this->session->set_userdata('level', $cek['level']);
			$this->session->set_userdata('kodeakses', "infotataruangkotapasuruan");
			redirect('pemohon/pemohon');
 
		}else{
			redirect('home/loginpemohon');
		}
	}

    function logout()
    {

		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('ktp');
		$this->session->unset_userdata('notelp');
		$this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect('home/loginpemohon');
	}
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		error_reporting(0);
		$this->load->model('M_login');
    }

    public function index()
    {
		$kodeakses	= $this->session->userdata('kodeakses');
		$level		= $this->session->userdata('level');

		if((empty($kodeakses)) AND (empty($level))) {
			$this->load->view('_backend/login');
		}
		else {
			redirect('admin');
		}
        
	}

    function aksi_login()
    {
		$email      = $this->input->post('email');
		$password   = $this->input->post('password');
		$pswd 		= md5($password);
		$cek 		= $this->M_login->cek_login($email,$pswd);
		if($cek!==FALSE) {
			$this->session->set_userdata('id', $cek['id']);
			$this->session->set_userdata('nama', $cek['nama']);
			$this->session->set_userdata('email', $cek['email']);
			$this->session->set_userdata('password', $cek['password']);
			$this->session->set_userdata('level', $cek['level']);
			$this->session->set_userdata('kodeakses', "infotataruangkotapasuruan");
			redirect('admin/index');
 
		}else{
			redirect('login');
		}
	}

	function logout(){

		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect('login');
	}
	
	function aksi_login_pemohon()
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
			redirect('pemohon/login');
		}
	}
    
	function logout_pemohon()
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('_backend/login');
	}

    function aksi_login()
    {
		$email      = $this->input->post('email', TRUE);
		$password   = $this->input->post('password', TRUE);
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("tbl_admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $nama,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('admin/dashboard');
 
		}else{
			redirect('login');
		}
	}
	
	function aksi_login_pemohon()
    {
			$ktp		= $this->input->post('ktp', TRUE);
			$notelp		= $this->input->post('notelp', TRUE);
			$where = array(
				'ktp' 		=> $ktp,
				'notelp' 	=> $notelp
				);
			$cek = $this->M_login->cek_login_pemohon("tbl_user",$where)->num_rows();
			if($cek > 0){
	
				$data_session = array(
					'nama' => $nama,
					'status' => "login"
					);
	
				$this->session->set_userdata($data_session);
	
				redirect('pemohon/pemohon');
	
				} else {
					redirect('pemohon/login');
				}

    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	function logout_pemohon(){
		$this->session->sess_destroy();
		redirect('pemohon/login');
	}
	
}

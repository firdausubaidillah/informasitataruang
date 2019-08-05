<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->model('M_user');
    }

    public function index()
    {
       $this->load->view('_frontend/index');
    }

    public function loginpemohon()
    {
        $this->load->view('_frontend/login');
    }

    public function registrasipemohon()
    {
        $this->load->view('_frontend/registrasi');
    }

    function daftar(){
		if (isset($_POST['submit'])) {
			$object = array('nama'			=> $this->input->post('nama'),
							'ktp'			=> $this->input->post('ktp'),
							'notelp'		=> $this->input->post('notelp'),
							'level'			=> 'PEMOHON',
							'aktif_user'	=> 'YA',
						);
		
			$object = $this->security->xss_clean($object);
            $this->M_user->simpan($object);
			redirect('pemohon/index');
		} else {
			redirect('home/registrasi');
		}
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('_frontend/index');
	}

	public function login()
	{
		$this->load->view('_frontend/login');
	}

	public function registrasi()
	{
		$this->load->view('_frontend/registrasi');
	}

	public function pemohon()
	{
		$this->load->view('_frontend/pemohon');
	}

	public function berkas()
	{
		$this->load->view('_frontend/berkas');
	}


}

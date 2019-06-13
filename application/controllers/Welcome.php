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
		$data['title'] = 'Dashboard';
		$data['page']  = '_backend/dashboard/index';
		$this->load->view('_backend/index', $data);
	}


}

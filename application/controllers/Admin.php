<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function pemohon()
	{
		$data['title'] = 'Pemohon';
		$data['page']  = '_backend/pemohon/index';
		$this->load->view('_backend/index', $data);
	}


}

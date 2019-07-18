<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemohon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_pemohon');
		$this->load->model('M_user');
		$this->load->model('M_pernyataan');
		$this->load->model('M_berkas');
	}

	public function index()
	{
		$this->load->view('_frontend/index');
	}

	public function validasi_index()
	{
		if (isset($_POST['submit'])) {
			$input = $_POST['submit'];
			redirect('pemohon/pemohon');
		}
		else {
			redirect('pemohon/registrasi');
		}
	}

	public function login()
	{
		$this->load->view('_frontend/login');
	}

	public function registrasi()
	{
		$this->load->view('_frontend/registrasi');
	}

	function daftar(){
		if (isset($_POST['submit'])) {
			$object = array('nama'			=> $this->input->post('nama'),
							'ktp'			=> $this->input->post('ktp'),
							'notelp'		=> $this->input->post('notelp'),
							'level'			=> 'Pemohon',
						);
		
			$object = $this->security->xss_clean($object);
			$this->M_user->simpan($object);
			redirect('pemohon/login');
		} else {
			redirect('pemohon/registrasi');
		}
	}

	public function pemohon()
	{	
		$data['kodeunik'] = $this->M_pemohon->buat_kode();
		$this->load->view('_frontend/pemohon', $data);
	}

	function tambahdatapemohon()
	{
		if (isset($_POST['submit'])) {
			$object = array('noreg'			=> $this->input->post('noreg'),
							'nama'			=> $this->input->post('nama'),
							'jk'			=> $this->input->post('jk'),
							'alamat'		=> $this->input->post('alamat'),
							'tgl'			=> $this->input->post('tgl'),
							'pekerjaan'		=> $this->input->post('pekerjaan'),
							'pemanfaatan'	=> $this->input->post('pemanfaatan'),
							'lokasi'		=> $this->input->post('lokasi'),
							'notelp'		=> $this->input->post('notelp')
						);
		
			$object = $this->security->xss_clean($object);
			$this->M_pemohon->simpan($object);
			redirect('pemohon/berkas');
		} else {
			redirect('pemohon/pemohon');
		}
	}

	public function pernyataan()
	{	
		$data['kodeunik'] = $this->M_pernyataan->buat_kode();
		$this->load->view('_frontend/pernyataan', $data);
	}

	function tambahdatapernyataan()
	{
		if (isset($_POST['submit'])) {
			$object = array('noreg'			=> $this->input->post('noreg'),
							'nama'			=> $this->input->post('nama'),
							'jk'			=> $this->input->post('jk'),
							'alamat'		=> $this->input->post('alamat'),							
							'pekerjaan'		=> $this->input->post('pekerjaan'),
							'ktp'			=> $this->input->post('ktp'),
							'notelp'		=> $this->input->post('notelp'),
							'lokasi'		=> $this->input->post('lokasi'),
							'tgl'			=> $this->input->post('tgl')
						);
		
			$object = $this->security->xss_clean($object);
			$this->M_pernyataan->simpan($object);
			redirect('pemohon/berkas');
		} else {
			redirect('pemohon/pernyataan');
		}
	}
	
	public function berkas()
	{	
		$data['kodeunik'] = $this->M_berkas->buat_kode();
		$this->load->view('_frontend/berkas', $data);
	}

	function tambahdataberkas()
	{
		if (isset($_POST['submit'])) {
			$object = array('noreg'			=> $this->input->post('noreg'),
							'nama'			=> $this->input->post('nama'),
							'ktp'			=> $this->input->post('ktp'),
							'kk'			=> $this->input->post('kk'),
							'bkl'			=> $this->input->post('bkl'),
							'pbb'			=> $this->input->post('pbb'),
							'sppl'			=> $this->input->post('sppl'),
							'sk'			=> $this->input->post('sk')
						);
		
			$object = $this->security->xss_clean($object);
			$this->M_berkas->simpan($object);
			redirect('pemohon/pernyataan');
		} else {
			redirect('pemohon/berkas');
		}
	}

	private function _do_upload1()
	{
		$config['upload_path'] 		= 'application/controllers/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 			= 10000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('ktp')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('pemohon/pernyataan');
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload2()
	{
		$config['upload_path'] 		= 'application/controllers/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 			= 10000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('kk')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('pemohon/pernyataan');
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload3()
	{
		$config['upload_path'] 		= 'application/controllers/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 			= 10000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('bkl')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('pemohon/pernyataan');
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload4()
	{
		$config['upload_path'] 		= 'application/controllers/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 			= 10000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('pbb')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('pemohon/pernyataan');
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload5()
	{
		$config['upload_path'] 		= 'application/controllers/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 			= 10000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('sppl')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('pemohon/pernyataan');
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload6()
	{
		$config['upload_path'] 		= 'application/controllers/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 			= 10000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('sk')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('pemohon/pernyataan');
		}
		return $this->upload->data('file_name');
	}

	public function tambah_aksi()
	{
		$data = array(
			'noreg' => $this->input->post('noreg'),
			'nama' => $this->input->post('nama'),
			
		);
		if (!empty($_FILES['ktp']['name'])) {
			$upload = $this->_do_upload1();
			$data['ktp'] = $upload;
		}
		if (!empty($_FILES['kk']['name'])) {
			$upload = $this->_do_upload2();
			$data['kk'] = $upload;
		}
		if (!empty($_FILES['bkl']['name'])) {
			$upload = $this->_do_upload3();
			$data['bkl'] = $upload;
		}
		if (!empty($_FILES['pbb']['name'])) {
			$upload = $this->_do_upload4();
			$data['pbb'] = $upload;
		}
		if (!empty($_FILES['sppl']['name'])) {
			$upload = $this->_do_upload5();
			$data['sppl'] = $upload;
		}
		if (!empty($_FILES['sk']['name'])) {
			$upload = $this->_do_upload6();
			$data['sk'] = $upload;
		}
		
		$this->M_berkas->insert($data);
		redirect('pemohon/pernyataan', $data);
	}
}
?>

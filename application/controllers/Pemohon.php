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

	function daftar(){
		if (isset($_POST['submit'])) {
			$object = array('nama'			=> $this->input->post('nama'),
							'ktp'			=> $this->input->post('ktp'),
							'notelp'		=> $this->input->post('notelp'),
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
			$object = array('id'			=> $this->input->post('id'),
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
		$this->load->view('_frontend/berkas');
	}
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_pemohon');
		$this->load->model('M_berkas');
	}

	public function index()
	{
		$this->load->view('_backend/login');
	}

	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$data['page']  = '_backend/dashboard/index';
		$this->load->view('_backend/index', $data);
	}

	

	// Pemohon
	public function pemohon()
	{
		$data['title'] = 'Pemohon';
		$data['page']  = '_backend/pemohon/index';
		$data['data'] = $this->M_pemohon->tampil()->result();
		$this->load->view('_backend/index', $data);
		
	}

	public function tambah_pemohon()
	{
		$data['title'] = 'Pemohon';
		$data['page'] = '_backend/pemohon/tambah';
		$data['kodeunik'] = $this->M_pemohon->buat_kode();
		$this->load->view('_backend/index', $data);
	}

	function tambahdata_pemohon()
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
			redirect('admin/pemohon');
		} else {
			redirect('admin/pemohon');
		}
	}

	public function tampilubah_pemohon($id)
	{
		$data['title']	= 'Pemohon';
		$data['page']	= '_backend/pemohon/ubah';
		$data['data']	= $this->M_pemohon->tampil_ubah($id)->result();
		$this->load->view('_backend/index', $data);
	}

	function ubahdata_pemohon(Type $var = null)
	{
		if(isset($_POST['submit'])){
			$id 	= $this->input->post('noreg');
			$object = array('nama' 			=> $this->input->post('nama'),
							'jk'			=> $this->input->post('jk'),
							'alamat'		=> $this->input->post('alamat'),
							'tgl'			=> $this->input->post('tgl'),
							'pekerjaan'		=> $this->input->post('pekerjaan'),
							'pemanfaatan'	=> $this->input->post('pemanfaatan'),
							'lokasi'		=> $this->input->post('lokasi'),
							'notelp'		=> $this->input->post('notelp'),
							);
			$this->M_pemohon->ubah($id, $object);
			$object = $this->security->xss_clean($object);
			redirect('admin/pemohon');
		} else {
			redirect('admin/pemohon');
		}
	}

	function hapus_pemohon($id)
	{
		$this->M_pemohon->hapus($id);
		redirect('admin/pemohon');
	}

	// Berkas
	public function berkas()
	{
		$data['title'] = 'Berkas';
		$data['page']  = '_backend/berkas/index';
		$data['data'] = $this->M_berkas->tampil()->result();
		$this->load->view('_backend/index', $data);
		
	}

	public function tambah_berkas()
	{
		$data['title'] = 'Analisa Data';
		$data['page'] = '_backend/berkas/tambah';
		$this->load->view('_backend/index', $data);
	}

}

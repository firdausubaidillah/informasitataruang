<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->helper('url');
		$this->load->model('M_pemohon');
		$this->load->model('M_berkas');
		$this->load->model('M_petugassurvei');
		$this->load->model('M_analisadata');

		$kodeakses = $this->session->userdata('kodeakses');
		$level = $this->session->userdata('level');

		if ((empty($kodeakses)) AND (empty($level)))
		{
		 redirect('login');
		}
	}

	public function index()
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
		$data['data'] = $this->M_pemohon->admin_tampil()->result();
		$this->load->view('_backend/index', $data);
		
	}

	public function tampilubah_pemohon($id)
	{
		$data['title']	= 'Pemohon';
		$data['page']	= '_backend/pemohon/ubah';
		$data['data']	= $this->M_pemohon->tampil_ubah($id)->result();
		$this->load->view('_backend/index', $data);
	}

	function ubahdata_pemohon()
	{
		if(isset($_POST['submit'])){
			$id 	= $this->input->post('id');
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
		$data['data'] = $this->M_berkas->admintampilberkas()->result();
		$this->load->view('_backend/index', $data);
		
	}

	public function tambah_berkas()
	{
		$data['title'] = 'Analisa Data';
		$data['page'] = '_backend/berkas/tambah';
		$this->load->view('_backend/index', $data);
	}

	public function tampilubah_berkas($id)
	{
		$data['title']	= 'Berkas';
		$data['page']	= '_backend/berkas/ubah';
		$data['data']	= $this->M_berkas->tampil_ubah($id)->result();
		$this->load->view('_backend/index', $data);
	}

	function ubahdata_berkas()
	{
		if(isset($_POST['submit'])){
			$id 	= $this->input->post('id');
			$object = array('noktp'				=> $this->input->post('noktp'),
							'noreg'				=> $this->input->post('noreg'),
							'nama'				=> $this->input->post('nama'),
							'status_berkas'		=> $this->input->post('status_berkas'),
							'tgl_persetujuan'	=> date('Y-m-d')
							);
			$this->M_berkas->ubah($id, $object);
			$object = $this->security->xss_clean($object);
			redirect('admin/berkas');
		} else {
			redirect('admin/berkas');
		}
	}

	function hapus_berkas($id)
	{
		$this->M_berkas->hapus($id);
		redirect('admin/berkas');
	}


	//ANALISA DATA
	public function analisadata()
	{
		$data['title'] = 'Analisa Data';
		$data['page']  = '_backend/analisadata/index';
		$data['data']  = $this->M_analisadata->tampil()->result();
		$this->load->view('_backend/index', $data);
	}

	public function tampilubah_analisadata($id)
	{
		$data['title']	= 'Analisa Data';
		$data['page']	= '_backend/analisadata/ubah';
		$data['data']	= $this->M_analisadata->tampil_ubah($id)->result();
		$this->load->view('_backend/index', $data);
	}

	function ubahdata_analisadata()
	{
		if(isset($_POST['submit'])){
			$id 	= $this->input->post('id');
			$object = array('petugas_survei'	=> $this->input->post('petugas_survei'),
							'tgl_survei'		=> $this->input->post('tgl_survei'),
							);
			$this->M_analisadata->ubah($id, $object);
			$object = $this->security->xss_clean($object);
			redirect('admin/analisadata');
		} else {
			redirect('admin/analisadata');
		}
	}

	//PETUGAS SURVEI
	public function petugassurvei()
	{
		$data['title'] = 'Petugas Survei';
		$data['page']  = '_backend/petugassurvei/index';
		$data['data']  = $this->M_petugassurvei->tampil()->result();
		$this->load->view('_backend/index', $data);
		
	}

	public function tambah_petugassurvei()
	{
		$data['title'] = 'Petugas Survei';
		$data['page'] = '_backend/petugassurvei/tambah';
		$this->load->view('_backend/index', $data);
	}

	public function simpan_petugassurvei()
	{
		if(isset($_POST['submit'])){
			$object = array('nama_petugassurvei'	=> $this->input->post('nama_petugassurvei'),
							'jabatan'				=> $this->input->post('jabatan')
							);
			$object = $this->security->xss_clean($object);
			$this->M_petugassurvei->simpan($object);
			redirect('admin/petugassurvei');
		} else {
			redirect('admin/petugassurvei');
		}
	}

	public function tampilubah_petugassurvei($id)
	{
		$data['title']	= 'Petugas Survei';
		$data['page']	= '_backend/petugassurvei/ubah';
		$data['data']	= $this->M_petugassurvei->tampil_ubah($id)->result();
		$this->load->view('_backend/index', $data);
	}

	function ubahdata_petugassurvei()
	{
		if(isset($_POST['submit'])){
			$id 	= $this->input->post('id');
			$object = array('nama_petugassurvei'	=> $this->input->post('nama_petugassurvei'),
							'jabatan'				=> $this->input->post('jabatan'),
							);
			$this->M_petugassurvei->ubah($id, $object);
			$object = $this->security->xss_clean($object);
			redirect('admin/petugassurvei');
		} else {
			redirect('admin/petugassurvei');
		}
	}

	function hapus_petugassurvei($id)
	{
		$this->M_berkas->hapus($id);
		redirect('admin/petugassurvei');
	}


}

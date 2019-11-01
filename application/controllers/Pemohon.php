<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemohon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->helper('url','tgl_indo_helper');
		$this->load->model('M_pemohon');
		$this->load->model('M_user');
		$this->load->model('M_pernyataan');
		$this->load->model('M_formulir');
		$this->load->model('M_berkas');
		$this->load->model('M_analisadata');
		$this->load->model('M_pk');
		$this->load->library('session');

		$kodeakses	= $this->session->userdata('kodeakses');
		$ktp		= $this->session->userdata('ktp');

		if((empty($kodeakses)) AND (empty($ktp))) {
			redirect('loginpemohon');
		}
	}

	public function index()
	{
		$this->load->view('_frontend/index');
	}

	//PEMOHON
	public function pemohon()
	{	
		$data['kodeunik'] 	= $this->M_pemohon->buat_kode();
		$data['databerkas']	= $this->M_berkas->tampil();
		$data['timeline']	= $this->M_analisadata->timeline($id);
		$data['datapemohon']= $this->M_pemohon->tampilpemohon($id);
		$data['dataperubahan']= $this->M_pk->tampilperubahan($id);
		$this->load->view('_frontend/pemohon', $data);
	}

	public function datapemohon()
	{
		$this->load->view('_frontend/tambahdatapemohon');
	}

	function tambahdatapemohon()
	{
		if (isset($_POST['submit'])) {
			$object = array('ktp'			=> $this->input->post('ktp'),
							'nama'			=> $this->input->post('nama'),
							'jk'			=> $this->input->post('jk'),
							'alamat'		=> $this->input->post('alamat'),
							'pekerjaan'		=> $this->input->post('pekerjaan'),
							'pemanfaatan'	=> $this->input->post('pemanfaatan'),
							'lokasi'		=> $this->input->post('lokasi'),
							'notelp'		=> $this->input->post('notelp')
						);
		
			$object = $this->security->xss_clean($object);
			$this->M_pemohon->simpan($object);
			redirect('pemohon/pemohon');
		} else {
			echo "Data Gagal Tersimpan";
		}
	}

	//BERKAS
	function tambahdataberkas()
	{
		if (isset($_POST['submit2'])) {
			$object = array('noktp'			=> $this->input->post('noktp'),
							'noreg'			=> $this->input->post('noreg'),
							'tgl'			=> $this->input->post('tgl'),
							'nama'			=> $this->input->post('nama'),
							'status_berkas'	=> 'Menunggu Persetujuan'
						);
						if (!empty($_FILES['ktp']['name'])) {
							$upload = $this->_do_upload1();
							$object['ktp'] = $upload;
						}
						if (!empty($_FILES['kk']['name'])) {
							$upload = $this->_do_upload2();
							$object['kk'] = $upload;
						}
						if (!empty($_FILES['bkl']['name'])) {
							$upload = $this->_do_upload3();
							$object['bkl'] = $upload;
						}
						if (!empty($_FILES['pbb']['name'])) {
							$upload = $this->_do_upload4();
							$object['pbb'] = $upload;
						}
						if (!empty($_FILES['sppl']['name'])) {
							$upload = $this->_do_upload5();
							$object['sppl'] = $upload;
						}
						/* if (!empty($_FILES['sk']['name'])) {
							$upload = $this->_do_upload6();
							$object['sk'] = $upload;
						} */
		
			$object = $this->security->xss_clean($object);
			$this->M_berkas->simpan($object);
			redirect('pemohon/pemohon');
		} else {
			echo "Data Gagal Tersimpan";
		}
	}

	public function detail_berkas($id)
	{
		$primary = $this->input->get('noreg');
		$data['berkasdetail'] = $this->M_berkas->detail($id)->result();
		$this->load->view('_frontend/detailberkas', $data);
	}

	function hapus_berkas($id)
	{
		$this->M_berkas->hapus($id);
		redirect('pemohon/pemohon');
	}

	//UPLOAD
	private function _do_upload1()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10000;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('ktp')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			echo "Data Gagal Tersimpan";
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload2()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10000;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('kk')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			echo "Data Gagal Tersimpan";
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload3()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10000;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('bkl')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			echo "Data Gagal Tersimpan";
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload4()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10000;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('pbb')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			echo "Data Gagal Tersimpan";
		}
		return $this->upload->data('file_name');
	}

	private function _do_upload5()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10000;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('sppl')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			echo "Data Gagal Tersimpan";
		}
		return $this->upload->data('file_name');
	}

	/* private function _do_upload6()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10000;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= '';
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('sk')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			echo "Data Gagal Tersimpan";
		}
		return $this->upload->data('file_name');
	} */

	//FORMULIR
	public function downloadformulir($id)
	{
		$data['noreg'] 				= $this->M_formulir->noreg($id)->result();
		$data['datapemohonberkas']	= $this->M_formulir->datapemohonberkas()->result();
		$this->load->view('_frontend/cetakformulir', $data);
	}

	//PERUBAHAN
	public function tambahperubahan()
	{
		if (isset($_POST['submit'])) {
			$object = array('noktp'				=> $this->input->post('noktp'),
							'lokasi'			=> $this->input->post('lokasi'),
							'tgl_pengajuan'		=> $this->input->post('tgl_pengajuan'),
							'kelurahan'			=> $this->input->post('kelurahan'),
							'lahandiajukan'		=> $this->input->post('lahandiajukan'),
							'lahansesuai'		=> $this->input->post('lahansesuai'),
							'tujuanlahan'		=> $this->input->post('tujuanlahan'),
							'statustanah'		=> $this->input->post('statustanah'),
							'btsutara'			=> $this->input->post('btsutara'),
							'btsselatan'		=> $this->input->post('btsselatan'),
							'btstimur'			=> $this->input->post('btstimur'),
							'btsbarat'			=> $this->input->post('btsbarat'),
							'status'			=> 'Berkas Terkirim'
						);
		
			$object = $this->security->xss_clean($object);
			$this->M_pk->simpan($object);
			redirect('pemohon/pemohon');
		} else {
			echo "Data Gagal Tersimpan";
		}
	}

}

?>

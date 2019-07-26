<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berkas extends CI_Model {

    var $table = 'tbl_berkas';
    var $kunci = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $nama = $this->session->userdata('nama');
        $data = $this->db->query("SELECT * FROM $this->table WHERE nama='". $nama ."' GROUP BY $this->kunci DESC")->result();
        return $data;
    }

    public function admintampilberkas()
    {
        $data = $this->db->query("SELECT * FROM $this->table");
        return $data;
    }

    public function detail($id)
    {
        $data = $this->db->query("SELECT * FROM $this->table WHERE $this->kunci='". $id ."'");
        return $data;
    }

    public function simpan($object)
    {
        $query = $this->db->insert($this->table, $object);
        return $query;
    }

    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_berkas WHERE id='". $id ."'");
		return $query;
    }

    public function ubah($id, $object)
	{
		$this->db->where($this->kunci, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
	}

	public function hapus($id)
	{
		$query = $this->db->query("DELETE FROM tbl_berkas WHERE id='". $id ."'");
		return $query;
    }

	public function filter($id) {
		$query = $this->db->query("SELECT * FROM tbl_berkas WHERE id='". $id ."'")->row(0);
		return $query;
	}

}
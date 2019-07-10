<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berkas extends CI_Model {

    var $table = 'tbl_pemohon';
    var $primary = 'noreg';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM tbl_pemohon");
        return $query;
    }

    public function simpan($object)
    {
        $query = $this->db->insert($this->table, $object);
        return $query;
    }

    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_pemohon WHERE noreg='". $id ."'");
		return $query;
    }

    public function ubah($id, $object)
	{
		$this->db->where($this->primary, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
	}

	public function hapus($id)
	{
		$query = $this->db->query("DELETE FROM tbl_pemohon WHERE noreg='" . $id ."'");
		return $query;
	}

	public function filter($id) {
		$query = $this->db->query("SELECT * FROM tbl_pemohon WHERE noreg='". $id ."'")->row(0);
		return $query;
	}

}
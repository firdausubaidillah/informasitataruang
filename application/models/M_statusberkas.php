<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_statusberkas extends CI_Model {

    var $table = 'tbl_berkas';
    var $kunci = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM tbl_berkas WHERE status_berkas='Memenuhi Persyaratan' OR status_berkas='Belum Diambil'");
        return $query;
    }

    public function tampildepan()
    {
        $query = $this->db->query("SELECT * FROM tbl_berkas");
        return $query;
    }


    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT id, noreg, nama, status_berkas FROM $this->table WHERE $this->kunci='". $id ."'");
		return $query;
    }

    public function ubah($id, $object)
	{
		$this->db->where($this->kunci, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
    }

}
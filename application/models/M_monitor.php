<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_monitor extends CI_Model {

    var $table = 'tbl_berkas';
    var $kunci = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT id, noreg, nama, status_berkas FROM $this->table");
        return $query;
    }

    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT id, noreg, nama, status_berkas FROM $this->table WHERE $this->kunci='". $id ."'");
		return $query;
    }

    public function get()
    {
		$query = $this->db->query("SELECT * FROM $this->table");
        return $query->result();
    }

    public function ubah($id, $object)
	{
		$this->db->where($this->kunci, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pk extends CI_Model {

    var $table = 'tbl_perubahan';
    var $primary = 'id_perubahan';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function simpan($object)
    {
        $query = $this->db->insert($this->table, $object);
        return $query;
    }

    public function tampilperubahan($id)
    {
        $noktp = $this->session->userdata('ktp');
        $query = $this->db->query("SELECT * FROM $this->table WHERE noktp='". $noktp ."' GROUP BY $this->primary DESC")->result();
        return $query;
    }

    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_perubahan WHERE id_perubahan='". $id ."'");
		return $query;
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query;
    }

    public function ubah($id, $object)
	{
		$this->db->where($this->primary, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
    }

}
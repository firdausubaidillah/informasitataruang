<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_formulir extends CI_Model {

    var $table = 'tbl_berkas';
    var $primary = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function noreg($id)
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE id='". $id ."'");
		return $query;
    }

    public function datapemohonberkas()
    {
        $nama = $this->session->userdata('nama');
        $query = $this->db->query("SELECT * FROM tbl_pemohon WHERE nama='". $nama ."'");
		return $query;
    }

}
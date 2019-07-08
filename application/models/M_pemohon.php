<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemohon extends CI_Model {

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

}
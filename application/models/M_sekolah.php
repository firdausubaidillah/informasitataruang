<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {

    var $table = 't_sekolah';
    var $primary = 'id_sekolah';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM t_sekolah");
        return $query;
    }

    public function simpan($object)
    {
        $query = $this->db->insert($this->table, $object);
        return $query;
    }

}
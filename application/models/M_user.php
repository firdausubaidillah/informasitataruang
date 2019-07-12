<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    var $table = 'tbl_user';
    var $primary = 'id';

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
    
}
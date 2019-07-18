<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pernyataan extends CI_Model {

    var $table = 'tbl_pernyataan';
    var $primary = 'noreg';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function buat_kode()
    {
        $this->db->select('RIGHT(tbl_pernyataan.noreg,4) as kode', FALSE);
        $this->db->order_by('noreg','DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_pernyataan');
        if($query->num_rows() <> 0 ){
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        }
        else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodejadi = "TR".$kodemax;
        return $kodejadi;
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM tbl_pernyataan");
        return $query;
    }

    public function simpan($object)
    {
        $query = $this->db->insert($this->table, $object);
        return $query;
    }

    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_pernyataan WHERE id='". $id ."'");
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
		$query = $this->db->query("DELETE FROM tbl_pernyataan WHERE noreg='" . $id ."'");
		return $query;
	}

	public function filter($id) {
		$query = $this->db->query("SELECT * FROM tbl_pernyataan WHERE noreg='". $id ."'")->row(0);
		return $query;
	}

}
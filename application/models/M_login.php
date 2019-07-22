<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function _contruct() {
		parent::__contruct();
	}

	function cek_login($email,$password)
	{		
		$data = $this->db->query("SELECT * FROM tbl_admin WHERE email='$email' AND password='$password' AND aktif_admin='YA'");
		if ($data->num_rows() > 0){
			return $data->row_array();
		} else {
			return FALSE;
		}
	}

	function cek_login_pemohon($ktp, $notelp)
	{		
		$data = $this->db->query("SELECT * FROM tbl_user WHERE ktp='$ktp' AND notelp='$notelp'");
		if ($data->num_rows() > 0) {
			return $data->row_array();
		} else {
			return FALSE;
		}
	}


}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_karyawan extends CI_Model {

	public function getdata($key){
		$this->db->where('id_karyawan',$key);
		$hasil = $this->db->get('data_k');
		return $hasil;
	}
	public function getupdate($key,$db){
		$this->db->where('id_karyawan',$key);
		$this->db->update('data_k',$db);
	}
	public function getinsert($db){
		$this->db->insert('data_k',$db);
	}
	public function gethapus($key){
		$this->db->where('id_karyawan',$key);
		$this->db->delete('data_k');
	}
}
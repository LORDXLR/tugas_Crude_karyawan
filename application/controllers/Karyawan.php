<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_karyawan');
	}
	
	public function index()
	{
		$data['title'] = 'data karyawan';
		$data['judul'] = 'KARYAWAN';
		$data['konten'] = 'data_karyawan';
		$data['db'] = $this->db->get('data_k');
		$this->load->view('halaman_awal',$data);
	}
	public function form()
	{
		$data['title'] = 'Input data';
		$data['judul'] = 'Tambah Data';
		$data['konten'] = 'update_data';

		$data['kode']	 		= '';
		$data['nama'] 	 		= '';
		$data['alamat']  		= '';
		$data['jenis_kelamin'] 	= '';
		$data['email'] 	 		= '';
		$data['foto'] 			= '';
		$this->load->view('halaman_awal',$data);

	}

	public function edit()
	{
		$data['title'] = 'edit data';
		$data['judul'] = 'Tambah Data';
		$data['konten'] = 'update_data';
		$data['db'] = $this->db->get('data_k');
		
		
		$key = $this->uri->segment(3);
		$this->db->where('id_karyawan',$key);
		$query = $this->db->get('data_k');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data['kode']			= $row->id_karyawan;
				$data['nama'] 	 		= $row->nama;
				$data['alamat']  		= $row->alamat;
				$data['jenis_kelamin'] 	= $row->jenis_kelamin;
				$data['email'] 	 		= $row->email;
				$data['foto'] 			= $row->foto;
			}
		}
		else
		{
				$data['kode']	 		= '';
				$data['nama'] 	 		= '';
				$data['alamat']  		= '';
				$data['jenis_kelamin'] 	= '';
				$data['email'] 	 		= '';
				$data['foto'] 			= '';
		}

		$this->load->view('halaman_awal',$data);

	}
	public function simpan(){
		$key = $this->input->post('kode');
			$db['id_karyawan']		=  	$this->input->post('kode');
			$db['nama']				=  	$this->input->post('nama');
			$db['alamat']			=  	$this->input->post('alamat');
			$db['jenis_kelamin']	=  	$this->input->post('jenis_kelamin');
			$db['email']			=  	$this->input->post('email');
			$db['foto']				=  	$this->input->post('foto');
			$query = $this->Model_karyawan->getdata($key);

			if($query->num_rows()>0){
			$this->Model_karyawan->getupdate($key,$db);
			$this->session->set_flashdata('info','Data Berhasil Di Update');
		}
		else
		{
			$this->Model_karyawan->getinsert($db);
			$this->session->set_flashdata('info','Data Berhasil Di Simpan');
		}
		redirect('karyawan');
	}

	public function hapus(){
		
		$key = $this->uri->segment(3);
		$this->db->where('id_karyawan',$key);
		$query = $this->db->get('data_k');
		if($query->num_rows()>0){
			$this->Model_karyawan->gethapus($key);
		}
		redirect('karyawan');

	}
	
}
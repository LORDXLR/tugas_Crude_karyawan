<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Selamat datang';
		$data['judul'] = 'DASHBOARD';
		$data['konten'] = 'konten';
		$this->load->view('halaman_awal',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
}

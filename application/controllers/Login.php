<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}
	public function getlogin()
	{

		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->load->model('Model_login');
		$this->Model_login->getlogin($user,$pass);

	}
}

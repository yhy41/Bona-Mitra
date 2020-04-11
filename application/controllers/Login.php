<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('TheModel');
	}

	public function index()
	{
		$this->load->view('login'); 
	}

	public function login(){
		$data['Username'] = $this->input->post('Username', true);
		if($this->TheModel->login($data)){
			$_SESSION['Username'] = $data['Username'];
			redirect('/Con_Home');
		} else {
			$_SESSION['error_message'] = 'Login gagal';
		}

	}
}
?>
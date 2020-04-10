<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('TheModel');
	}
	public function index()
	{
		if(isset($_SESSION['Username'])){
			$data['admin'] = $this->TheModel->get_profile($_SESSION['Username']);
			$this->load->view('profile');
		} else {
			redirect('Login/index');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/login');
	}
}
?>
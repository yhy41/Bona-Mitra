<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Con_Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index()
	{
		if(isset($_SESSION['Username'])){
			$this->load->view('Home_admin');
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
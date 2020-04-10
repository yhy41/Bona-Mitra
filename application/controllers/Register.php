<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('TheModel');
	}

	public function index()
	{
		$this->load->view('register'); 
	}

	public function register(){
		$password = $this->input->post('password', true);
		$re_password = $this->input->post('re-password', true);
		$username = $this->input->post('username', true);
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$this->load->library('upload', $config);
		if($password == $re_password){
			if(sizeof($this->TheModel->get_profile($username)) == 0){
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('uploadImage')){
					$_SESSION['error'] = 'gagal upload';
				} else {
					$data = [
						'username' => $this->input->post('username', true),
						'password' => $this->input->post('password', true),
						'profile_pic' => $this->upload->data()['file_name']
					];
					$insert = $this->TheModel->insert_new_profle($data);
					if(!$insert){
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('register', $error);
					} else {
						redirect('/profile');
					}
				}
			} else {
				$_SESSION['error'] = 'username is already taken';
			}
		} else {
			$_SESSION['error'] = 'password not match';
		}
	}
}
?>
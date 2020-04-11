<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function inputdokter(){
		$data['id_dokter'] = $this->input->post('id_dokter', true);
		$data['nama_dokter'] = $this->input->post('nama_dokter', true);
		$data['kontak'] = $this->input->post('kontak', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$this->ModPilihan->inputdokter($data);
		$this->load->view('Input_Dokter');
	}
}
?>
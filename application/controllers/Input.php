<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index(){
		$this->load->view('Input_Dokter');
	}
	public function inputdokter(){
		$data['namaDokter'] = $this->input->post('nama_dokter', true);
		$data['kontak'] = $this->input->post('kontak', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$cek = $this->ModPilihan->inputdokter($data);
		if ($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('input');
	}
}
?>
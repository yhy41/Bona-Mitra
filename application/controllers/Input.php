<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function inputdokter(){
		
$data = array(


		'id_dokter' => $this->input->post('id_dokter'),
		'nama_dokter' => $this->input->post('nama_dokter'),
		'kontak'=> $this->input->post('kontak'),
		'alamat' => $this->input->post('alamat'),
        );

		$cek = $this->ModPilihan->inputdokter($data);
        if ($cek) $this->session->set_flashdata('info', 'Data Dokter Berhasil Ditambah');
        else $this->session->setflashdata('info', 'Produk Gagal Ditambah');
        $this->load->view('Input_Dokter'); 
	}
}
?>
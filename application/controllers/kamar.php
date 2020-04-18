<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kamar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['judul'] = 'Daftar Kamar';
		$data['kamar_inap'] = $this->ModPilihan->getAllKamar();
		if ($this->input->post('keyword')) {
			$data['kamar_inap'] = $this->ModPilihan->searchDataKamar();
		}
    	$this->load->view('kamar/index',$data);
	}

	public function tambahKamar()
	{
		$this->load->view('kamar/tambah');
	}

	public function delete($id_kamar)
	{
		$cek = $this->ModPilihan->deleteDataKamar($id_kamar);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('kamar','refresh');
	}

	public function change($id_kamar)
	{
		if($this->input->post('nama_kamar')){
				$this->form_validation->set_rules('nama_kamar', 'Nama_kamar', 'required');
				$this->ModPilihan->changeDataKamar($id_kamar);
				redirect('kamar');
		}else{
				$data['judul'] = 'Form Ubah Data Kamar';
				$data['kamar_inap'] = $this->ModPilihan->getKamarById($id_kamar);
				$this->load->view('kamar\ubah',$data);
		}
	}
}

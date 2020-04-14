<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class perawat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index(){
		
		$data['judul'] = 'Daftar perawat';
		$data['perawat'] = $this->ModPilihan->getAllPerawat();
		if ($this->input->post('keyword')) {
			$data['perawat'] = $this->ModPilihan->cariDataPerawat();
		}
		$this->load->view('perawat\Input_Perawat',$data);
	}
	public function LihatPerawat()
	{
		$data['judul'] = 'Daftar Perawat';
		$data['perawat'] = $this->ModPilihan->getAllPerawat();
		if ($this->input->post('keyword')) {
			$data['perawat'] = $this->ModPilihan->cariDataPerawat();
		}

    	$this->load->view('perawat\LihatPerawat',$data);


	}
	public function hapus($id_perawat)
	{
		$this->ModPilihan->hapusDataPerawat($id_perawat);
		$this->session->set_flashdata('success', 'perawat Berhasil DiHapus');
		redirect('perawat/LihatPerawat','refresh');

	}
	public function TambahPerawat()
	{
    	$this->load->view('perawat\Input_Perawat');

	}
	public function ubah($id_perawat)
	{
		
		if($this->input->post('nama_perawat')){
				$this->form_validation->set_rules('check_nama_perawat','check_alamat','check_kontak','required');
				$this->ModPilihan->ubahDataPerawat($id_perawat);
				redirect('perawat/LihatPerawat');
		}else{
				$data['judul'] = 'Form Ubah Data Perawat';
				$data['perawat'] = $this->ModPilihan->getPerawatById($id_perawat);
				$this->load->view('perawat\UbahPerawat',$data);
		}
	}
}
?>
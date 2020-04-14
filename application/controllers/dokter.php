<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dokter extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index(){
		
		$data['judul'] = 'Daftar Dokter';
		$data['dokter'] = $this->ModPilihan->getAllDokter();
		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}
		$this->load->view('dokter\Input_Dokter',$data);
	}
	public function LihatDokter()
	{
		$data['judul'] = 'Daftar Dokter';
		$data['dokter'] = $this->ModPilihan->getAllDokter();
		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}

    	$this->load->view('dokter\LihatDokter',$data);


	}
	public function hapus($id_dokter)
	{
		$this->ModPilihan->hapusDatadokter($id_dokter);
		$this->session->set_flashdata('success', 'Dokter Berhasil DiHapus');
		redirect('dokter/LihatDokter','refresh');
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa

	}
	public function TambahDokter()
	{
    	$this->load->view('dokter\Input_Dokter');

	}
	public function ubah($id_dokter)
	{
		if($this->input->post('nama_dokter')){
				$this->form_validation->set_rules('check_nama_dokter','check_alamat','check_kontak','required');
				$this->ModPilihan->ubahDataDokter($id_dokter);
				redirect('dokter/LihatDokter');
		}else{
				$data['judul'] = 'Form Ubah Data Dokter';
				$data['dokter'] = $this->ModPilihan->getDokterById($id_dokter);
				$this->load->view('dokter\UbahDokter',$data);
		}

		

		//from library form_validation, set rules for nama, nim, email = required

		
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index(){
		
		$data['judul'] = 'Daftar Pasien';
		$data['pasien'] = $this->ModPilihan->getAllPasien();
		if ($this->input->post('keyword')) {
			$data['pasien'] = $this->ModPilihan->cariDataPasisen();
		}
		$this->load->view('pasien\Input_Dokter',$data);
	}
	public function LihatPasien()
	{
		$data['judul'] = 'Daftar Pasien';
		$data['pasien'] = $this->ModPilihan->getAllPasien();
		if ($this->input->post('keyword')) {
			$data['pasien'] = $this->ModPilihan->cariDataPasien();
		}

    	$this->load->view('pasien\LihatPasien',$data);


	}
	public function hapus($id_pasien)
	{
		$this->ModPilihan->hapusDatapasien($id_pasien);
		$this->session->set_flashdata('success', 'Pasien Berhasil DiHapus');
		redirect('pasien/LihatPasien','refresh');
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa

	}
	public function TambahPasien()
	{
    	$this->load->view('pasien\Input_Pasien');

	}
	public function ubah($id_pasien)
	{
		if($this->input->post('nama_pasien')){
				$this->form_validation->set_rules('check_nama_pasien','check_tanggal_lahir','check_alamat','check_email','check_kontak','required');
				$this->ModPilihan->ubahDataPasien($id_pasien);
				redirect('pasien/LihatPasien');
		}else{
				$data['judul'] = 'Form Ubah Data Pasien';
				$data['pasien'] = $this->ModPilihan->getPasienById($id_pasien);
				$this->load->view('pasien\UbahPasien',$data);
		}

		

		//from library form_validation, set rules for nama, nim, email = required

		
	}
}
?>
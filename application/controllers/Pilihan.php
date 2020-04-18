<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pilihan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index()
	{
			$this->load->view('Pilihan');
	}
	public function masuk()
	{
    	$this->load->view('login');
	}
	public function masukpasien()
	{
    	$this->load->view('home\Home_pasien');
	}
	public function InformasiKlinik()
	{
    	$this->load->view('Informasi_Klinik');
	}
	public function Pasien()
	{
    	$this->load->view('Info_Guest\Pasien');
	}
	public function DaftarDokter()
	{
    	$this->load->view('Info_Guest\DaftarDokter');
	}
	public function DaftarPerawat()
	{
    	$this->load->view('Info_Guest\DaftarPerawat');
	}
	public function FormSaran()
	{
    	$this->load->view('masukan\FormSaran');
	}
	public function FormKomentar()
	{
    	$this->load->view('masukan\FormKomentar');
	}
	public function FormKritik()
	{
    	$this->load->view('masukan\FormKritik');
	}
	public function Kontak()
	{
    	$this->load->view('Guest\Kontak');
	}

// BATAS UNTUK ADMIN DI PILIHAN /////////////////////////////////////////////////////////////////////

	public function Home_admin()
	{
    	$this->load->view('home\Home_admin');
	}
	public function InformasiKlinikAdmin()
	{
    	$this->load->view('Informasi_KlinikAdmin');
	}
	public function Input_Pasien()
	{
    	$this->load->view('Input_Pasien');
	}




	public function Input_Dokter()
	{
		$data['judul'] = 'Daftar Dokter';
		$data['dokter'] = $this->ModPilihan->getAllDokter();
		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}

    	$this->load->view('LihatDokter',$data);


	}
	public function Tambah_Dokter()
	{
    	$this->load->view('Input_Dokter');

	}
	public function Jadwal_Dokter()
	{
    	$this->load->view('Jadwal_Dokter');
	}




	
	public function Input_Perawat()
	{
    	$this->load->view('Input_Perawat');
	}
	
	public function Jadwal_Perawat()
	{
    	$this->load->view('Jadwal_Perawat');
	}
	public function Pembayaran()
	{
    	$this->load->view('Pembayaran');
	}
	public function Pemeriksaan()
	{
    	$this->load->view('Pembayaran');
	}
	public function Info_KamarAdmin()
	{
    	$this->load->view('Info_KamarAdmin');
	}
}
?>
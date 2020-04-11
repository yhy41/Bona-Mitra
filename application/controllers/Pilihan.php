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
    	$this->load->view('Home_pasien');
	}
	public function InformasiKlinik()
	{
    	$this->load->view('Informasi_Klinik');
	}
	
	public function Pasien()
	{
    	$this->load->view('Pasien');
	}
	public function DaftarDokter()
	{
    	$this->load->view('DaftarDokter');
	}
	public function DaftarPerawat()
	{
    	$this->load->view('DaftarPerawat');
	}
	public function FormSaran()
	{
    	$this->load->view('FormSaran');
	}
	public function FormKomentar()
	{
    	$this->load->view('FormKomentar');
	}
	public function FormKritik()
	{
    	$this->load->view('FormKritik');
	}
	public function Kontak()
	{
    	$this->load->view('Kontak');
	}

// BATAS UNTUK ADMIN DI PILIHAN /////////////////////////////////////////////////////////////////////

	public function Home_admin()
	{
    	$this->load->view('Home_admin');
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
    	$this->load->view('Input_Dokter');
	}
	public function Input_Perawat()
	{
    	$this->load->view('Input_Perawat');
	}
	public function Jadwal_Dokter()
	{
    	$this->load->view('Jadwal_Dokter');
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
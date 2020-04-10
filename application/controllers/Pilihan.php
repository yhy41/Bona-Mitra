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
	public function InformasiKlinikAdmin()
	{
    	$this->load->view('Informasi_KlinikAdmin');
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

}
?>
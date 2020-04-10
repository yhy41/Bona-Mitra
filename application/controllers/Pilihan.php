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
}
?>
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
    	$data['pasien'] = $this->ModPilihan->getAllPasien();
    	if($this->input->post('keyword')) {
    		$data['pasien'] = $this->ModPilihan->cariDataPasien();
    	}
    	$this->load->view('Info_Guest\Pasien',$data);
	}
	public function DaftarDokter()
	{
		$data['dokter'] = $this->ModPilihan->getAllDokter();
		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}

    	$this->load->view('Info_Guest\DaftarDokter',$data);
	}
	public function DaftarPerawat()
	{
		$data['perawat'] = $this->ModPilihan->getAllPerawat();
		if ($this->input->post('keyword')) {
			$data['perawat'] = $this->ModPilihan->cariDataPerawat();
		}

    	$this->load->view('Info_Guest\DaftarPerawat',$data);
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
		$data['kamar_inap'] = $this->ModPilihan->getAllKamar();
		if ($this->input->post('keyword')) {
			$data['kamar_inap'] = $this->ModPilihan->cariDataKamar();
		}
    	$this->load->view('Info_KamarAdmin',$data);
	}

	public function Jadwal()
	{
		$data['jadwal'] = 'Jadwal Dokter';
		$data['jadwal'] = $this->ModPilihan->getAllJadwal();
		if ($this->input->post('keyword')) {
			$data['jadwal'] = $this->ModPilihan->cariJadwal();
		}
		$this->load->view('jadwal\Lihat_Jadwal',$data);

	}
}
?>
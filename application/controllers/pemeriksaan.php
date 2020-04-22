<?php

class Pemeriksaan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Pemeriksaan Pasien';
		$data['periksa'] = $this->ModPilihan->getAllPemeriksaan();
		if ($this->input->post('keyword')) {
			$data['periksa'] = $this->ModPilihan->cariPemeriksaan();
		}
		$this->load->view('pemeriksaan\Lihat_Pemeriksaan',$data);
	}

	public function PilihPasien()
	{
		$data['judul'] = 'Input Pasien Pemeriksaan';
		$data['pasien'] = $this->ModPilihan->getPasienPeriksa();

		if ($this->input->post('keyword')) {
			$data['pasien'] = $this->ModPilihan->cariDataPasien();
		}

		$this->load->view('pemeriksaan\Pilih_Pasien',$data);
	}

	public function PilihDokter($id_pasien)
	{
		$data['judul'] = 'Input Pemeriksaan Dokter';
		$data['id_pasien'] = $id_pasien;
		$data['dokter'] = $this->ModPilihan->getDokterPeriksa();

		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}

		$this->load->view('pemeriksaan\Pilih_Dokter',$data);
	}

	public function inputPemeriksaan($id_dokter,$id_pasien)
	{
		$data['judul'] = 'Input Pemeriksaan Pasien';
		$data['pasien'] = $this->ModPilihan->getPasienById($id_pasien);
		$data['dokter'] = $this->ModPilihan->getDokterById($id_dokter);

		$this->load->view('pemeriksaan\Input_Pemeriksaan',$data);
	}

	public function hapus($id_pemeriksaan)
	{
		$cek = $this->ModPilihan->hapusPemeriksaan($id_pemeriksaan);
		if($cek){
			$this->session->set_flashdata('info','Data berhasil dihapus!');
		}else{
			$this->session->set_flashdata('info','Data gagal dihapus!');
		}
		redirect('pemeriksaan\index','refresh');
	}
}

?>
<?php

class RawatInap extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Riwayat Rawat Inap Pasien';
		$data['rawat'] = $this->ModPilihan->getAllRawatInap();
		if ($this->input->post('keyword')) {
			$data['rawat'] = $this->ModPilihan->cariRawatInap();
		}
		$this->load->view('rawatInap\Lihat_RawatInap',$data);
	}

	public function PilihPemeriksaan()
	{
		$data['judul'] = 'Input Pemeriksaan Pasien';
		$data['periksa'] = $this->ModPilihan->getAllPemeriksaan();

		if ($this->input->post('keyword')) {
			$data['periksa'] = $this->ModPilihan->cariPemeriksaan();
		}

		$this->load->view('rawatInap\Pilih_Pemeriksaan',$data);
	}

	public function PilihKamar($id_pemeriksaan)
	{
		$data['judul'] = 'Input Kamar Rawat Inap';
		$data['id_pemeriksaan'] = $id_pemeriksaan;
		$data['kamar'] = $this->ModPilihan->getKamarRawat();

		if ($this->input->post('keyword')) {
			$data['periksa'] = $this->ModPilihan->searchDataKamar();
		}

		$this->load->view('rawatInap\Pilih_Kamar',$data);
	}

	public function InputRawatInap($id_kamar,$id_pemeriksaan)
	{
		$data['judul'] = 'Input Pemeriksaan Pasien';
		$data['kamar'] = $this->ModPilihan->getKamarById($id_kamar);
		$data['pemeriksaan'] = $this->ModPilihan->getPemeriksaanById($id_pemeriksaan);

		$this->load->view('rawatInap\Input_Rawat_Inap',$data);
	}

	public function hapus($id)
	{
		$cek = $this->ModPilihan->hapusRawatInap($id);
		if($cek){
			$this->session->set_flashdata('info','Data berhasil dihapus!');
		}else{
			$this->session->set_flashdata('info','Data gagal dihapus!');
		}
		redirect('rawatInap\index','refresh');
	}

}

?>
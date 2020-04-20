<?php

class Feedback extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan');
		$this->load->library('form_validation');
	}

	public function Saran()
	{
		$data['judul'] = 'Saran Pengunjung';
		$data['saran'] = $this->ModPilihan->getAllSaran();

		$this->load->view('masukan\LihatSaran',$data);
	}

	public function Komentar()
	{
		$data['judul'] = 'Komentar Pengunjung';
		$data['komentar'] = $this->ModPilihan->getAllKomentar();

		$this->load->view('masukan\LihatKomentar',$data);
	}

	public function Kritik()
	{
		$data['judul'] = 'Kritik Pengunjung';
		$data['kritik'] = $this->ModPilihan->getAllKritik();

		$this->load->view('masukan\LihatKritik',$data);
	}

	public function hapus($id,$kategori)
	{
		if($this->ModPilihan->hapusFeedback($id)){
			$this->session->set_flashdata('info','Data berhasil dihapus ');
		}
		if($kategori == 'Saran'){
			redirect('feedback\saran','refresh');
		}else if($kategori == 'Komentar'){
			redirect('feedback\komentar','refresh');
		}else if ($kategori == 'Kritik') {
			redirect('feedback\kritik','refresh');
		}
	}

	public function hapusSemua($kategori)
	{
		if($this->ModPilihan->hapusSemua($kategori)){
			$this->session->set_flashdata('info','Data berhasil dihapus ');
		}
		if($kategori == 'Saran'){
			redirect('feedback\saran','refresh');
		}else if($kategori == 'Komentar'){
			redirect('feedback\komentar','refresh');
		}else if ($kategori == 'Kritik') {
			redirect('feedback\kritik','refresh');
		}
	}
}
?>
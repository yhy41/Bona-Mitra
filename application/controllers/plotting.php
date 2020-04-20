<?php

class Plotting extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Plotting Jadwal Dokter';
		$data['plot'] = $this->ModPilihan->getAllPlot();
		if ($this->input->post('keyword')) {
			$data['plot'] = $this->ModPilihan->cariPlot();
		}
		$this->load->view('plotting\Lihat_Plotting',$data);
	}

	public function PilihDokter()
	{
		$data['judul'] = 'Input Plotting Dokter';
		$data['dokter'] = $this->ModPilihan->getAllDokter();

		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}

		$this->load->view('plotting\Pilih_Dokter',$data);
	}

	public function PilihJadwal($id_dokter)
	{
		$data['judul'] = 'Pilih Jadwal';
		$data['id_dokter'] = $id_dokter;
		$data['jadwal'] = $this->ModPilihan->getAllJadwal();

		if ($this->input->post('keyword')) {
			$data['jadwal'] = $this->ModPilihan->cariJadwal();
		}

		$this->load->view('plotting\Pilih_Jadwal',$data);
	}

	public function PlotDokter($id_jadwal,$id_dokter)
	{
		$cek = $this->ModPilihan->tambahPlotting($id_jadwal,$id_dokter);
		if($cek){
			$this->session->set_flashdata('info','berhasil ditambah!');
		}else{
			$this->session->set_flashdata('info','gagal ditambah!');
		}

		redirect('plotting\index');
	}

	public function hapus($id)
	{
		$cek = $this->ModPilihan->hapusPlot($id);
		if($cek){
			$this->session->set_flashdata('info','berhasil dihapus!');
		}else{
			$this->session->set_flashdata('info','gagal dihapus!');
		}
		redirect('plotting\index','refresh');
	}
}

?>
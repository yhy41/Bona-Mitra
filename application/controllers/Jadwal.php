<?php

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['jadwal'] = 'Jadwal Dokter';
		$data['jadwal'] = $this->ModPilihan->getAllJadwal();
		if ($this->input->post('keyword')) {
			$data['jadwal'] = $this->ModPilihan->cariJadwal();
		}
		$this->load->view('jadwal\Lihat_Jadwal',$data);
	}

	public function tambah()
	{
		
		$data['judul'] = 'Form Jadwal Dokter';
		if($this->input->post('hari')){
			$this->form_validation->set_rules('hari','Hari','required');
			$this->form_validation->set_rules('jam_mulai','Jam_Mulai','required');
			$this->form_validation->set_rules('jam_selesai','Jam_Selesai','required');

			
			if($this->form_validation->run() == false){
				redirect('Tambah_Jadwal','refresh');
			}else{
				$this->ModPilihan->tambahJadwal();
				$this->session->set_flashdata('flash','berhasil ditambah!');
				redirect('Jadwal_Dokter','refresh');
			}
		}else{
			$this->load->view('jadwal\Tambah_Jadwal',$data);
		}
	}

	public function hapus($id)
	{
		$this->ModPilihan->hapusJadwal($id);
		$this->session->set_flashdata('info','Data berhasil dihapus ');
		redirect('pilihan\jadwal','refresh');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Jadwal';

		$data['jadwal'] = $this->ModPilihan->getJadwalById($id);

		if($this->input->post('hari')){
			$this->form_validation->set_rules('hari','Hari','required');
			$this->form_validation->set_rules('jam_mulai','Jam_Mulai','required');
			$this->form_validation->set_rules('jam_selesai','Jam_Selesai','required');

			if($this->form_validation->run() == false){
				$this->load->view('Ubah_Jadwal',$data);
			}else{
				$this->ModPilihan->ubahJadwal($id);
				$this->session->set_flashdata('info','Data berhasil diubah'); 
				redirect('jadwal\index','refresh');
			}
		}else{
			$this->load->view('jadwal\Ubah_Jadwal',$data);
		}
		// if($this->input->post('hari')){
		// 		$this->form_validation->set_rules('check_hari','check_jam_mulai','check_jam_selesai','required');
		// 		$this->ModPilihan->ubahDataPasien($id_pasien);
		// 		redirect('jadwal/index');
		// }else{
		// 		// $data['judul'] = 'Form Ubah Data Pasien';
		// 		// $data['pasien'] = $this->ModPilihan->getPasienById($id_pasien);
		// 		$this->load->view('jadwal\Ubah_Jadwal',$data);
		// }
	}
}
?>


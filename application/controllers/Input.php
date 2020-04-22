<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index(){
		
		$data['judul'] = 'Daftar Dokter';
		$data['dokter'] = $this->ModPilihan->getAllDokter();
		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->ModPilihan->cariDataDokter();
		}
		$this->load->view('dokter\Input_Dokter',$data);
	}

	public function perawat(){
		
		$data['judul'] = 'Daftar Perawat';
		$data['perawat'] = $this->ModPilihan->getAllPerawat();
		if ($this->input->post('keyword')) {
			$data['perawat'] = $this->ModPilihan->cariDataPerawat();
		}
		$this->load->view('perawat\Input_Perawat',$data);
	}
	public function pasien(){
		
		$data['judul'] = 'Daftar Pasien';
		$data['pasien'] = $this->ModPilihan->getAllPasien();
		if ($this->input->post('keyword')) {
			$data['pasien'] = $this->ModPilihan->cariDataPasien();
		}
		$this->load->view('pasien\Input_Pasien',$data);
	}


	public function inputdokter(){

		$data['nama_dokter'] = $this->input->post('nama_dokter', true);
		$data['kontak'] = $this->input->post('kontak', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$cek = $this->ModPilihan->inputdokter($data);
		if ($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('input');

		
// $data = array(


// 		'id_dokter' => $this->input->post('id_dokter'),
// 		'nama_dokter' => $this->input->post('nama_dokter'),
// 		'kontak'=> $this->input->post('kontak'),
// 		'alamat' => $this->input->post('alamat'),
//         );

// 		$cek = $this->ModPilihan->inputdokter($data);
//         if ($cek) $this->session->set_flashdata('info', 'Data Dokter Berhasil Ditambah');
//         else $this->session->setflashdata('info', 'Produk Gagal Ditambah');
//         $this->load->view('Input_Dokter'); 

	}
	public function inputperawat(){
		$data['nama_perawat'] = $this->input->post('nama_perawat', true);
		$data['kontak'] = $this->input->post('kontak', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$cek = $this->ModPilihan->inputperawat($data);
		if ($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('input/perawat');

	}
	public function inputpasien(){
		$data['nama_pasien'] = $this->input->post('nama_pasien', true);
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$data['email'] = $this->input->post('email', true);
		$data['kontak'] = $this->input->post('kontak', true);
		$cek = $this->ModPilihan->inputpasien($data);
		if ($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('pasien\LihatPasien');

	}

	public function kamar(){
		
		$data['judul'] = 'Daftar Kamar';
		$data['kamar_inap'] = $this->ModPilihan->getAllKamar();
		if ($this->input->post('keyword')) {
			$data['kamar_inap'] = $this->ModPilihan->cariDataKamar();
		}
		$this->load->view('kamar\tambah',$data);
	}

	public function inputkamar(){
		$data['nama_kamar'] = $this->input->post('nama_kamar', true);
		$cek = $this->ModPilihan->addDataKamar($data);
		if ($cek) $this->session->set_flashdata('info','ditambahkan!');
		else $this->session->set_flashdata('info','ditambahkan!');
		redirect('kamar');

	}

	public function inputjadwal(){
		$data['hari'] = $this->input->post('hari',true);
		$data['jam_mulai'] = $this->input->post('jam_mulai',true);
		$data['jam_selesai'] = $this->input->post('jam_selesai',true);
		$cek = $this->ModPilihan->tambahjadwal($data);
		if($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('pilihan\jadwal');
	}

	public function inputpemeriksaan()
	{
		$data['id_pasien'] = $this->input->post('id_pasien',true);
		$data['id_dokter'] = $this->input->post('id_dokter',true);
		$data['deskripsi'] = $this->input->post('deskripsi',true);
		$data['tanggal'] = $this->input->post('tanggal',true);
		$cek = $this->ModPilihan->tambahPemeriksaan($data);
		if($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('pemeriksaan\index');
	}

	public function inputrawatinap()
	{
		$data['id_pemeriksaan'] = $this->input->post('id_pemeriksaan',true);
		$data['id_kamar'] = $this->input->post('id_kamar',true);
		$data['tanggal_masuk'] = $this->input->post('tanggal_masuk',true);
		$data['tanggal_keluar'] = $this->input->post('tanggal_keluar',true);
		$cek = $this->ModPilihan->tambahRawatInap($data);
		if($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
		else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
		redirect('rawatInap\index');
	}
}
?>
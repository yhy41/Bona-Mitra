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
		redirect('input/pasien');

	}
}
?>
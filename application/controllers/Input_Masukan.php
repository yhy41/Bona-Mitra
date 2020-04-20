<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input_Masukan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan');
	}
	public function index(){
		
	}

	public function masukan(){
		
		$data['judul'] = 'Daftar feedback';
		$data['feedback'] = $this->ModPilihan->getAllKomentar();
		if ($this->input->post('keyword')) {
			$data['komentar    '] = $this->ModPilihan->cariDKomentar();

		}
		$this->load->view('masukan\FormKomentar',$data);
	}
	


	public function feedback(){

		$data['nama_tamu'] = $this->input->post('nama_tamu', true);
		$data['email_tamu'] = $this->input->post('email_tamu', true);
		$data['kategori'] = $this->input->post('kategori', true);
		$data['isi'] = $this->input->post('isi', true);
		$cek = $this->ModPilihan->masukanSKK($data);
		if ($cek) $this->session->set_flashdata('info','Feedback berhasil dikirim!');
		else $this->session->set_flashdata('info','Feedback gagal dikirim!');
		redirect('pilihan/FormKomentar');
	}

		
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

	
	// public function inputperawat(){
	// 	$data['nama_perawat'] = $this->input->post('nama_perawat', true);
	// 	$data['kontak'] = $this->input->post('kontak', true);
	// 	$data['alamat'] = $this->input->post('alamat', true);
	// 	$cek = $this->ModPilihan->inputperawat($data);
	// 	if ($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
	// 	else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
	// 	redirect('input/perawat');

	// }
	// public function inputpasien(){
	// 	$data['nama_pasien'] = $this->input->post('nama_pasien', true);
	// 	$data['tanggal_lahir'] = $this->input->post('tanggal_lahir', true);
	// 	$data['alamat'] = $this->input->post('alamat', true);
	// 	$data['email'] = $this->input->post('email', true);
	// 	$data['kontak'] = $this->input->post('kontak', true);
	// 	$cek = $this->ModPilihan->inputpasien($data);
	// 	if ($cek) $this->session->set_flashdata('info','Data Berhasil Ditambahkan!');
	// 	else $this->session->set_flashdata('info','Data Gagal Ditambahkan!');
	// 	redirect('input/pasien');

	// }
}
?>
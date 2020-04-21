<?php
defined('BASEPATH') OR exit();
class Input_Masukan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan','m');
	}
	public function index(){
		
		$data['judul'] = 'Input Masukan';
		$this->load->view('masukan\FormKomentar',$data);
	}

	public function masukan(){
		
		$data['judul'] = 'Daftar feedback';
		$data['feedback'] = $this->ModPilihan->getAllKomentar();
		
		$this->load->view('masukan\FormKomentar',$data);
	}
	


	public function feedback(){


		$nama_tamu=$this->input->post('nama_tamu');

    	$kategori=$this->input->post('kategori');
    	
        $email_tamu=$this->input->post('email_tamu');

        $isi=$this->input->post('isi');

    	if($nama_tamu==''){
    		$result = [
	    		'status' => false,
	    		'message' => 'Nama tamu masih kosong',
	    	];
    	}elseif ($kategori=='') {
    		$result = [
	    		'status' => false,
	    		'message' => 'Katergori masih kosong',
	    	];
    	}elseif ($email_tamu=='') {
    		$result = [
	    		'status' => false,
	    		'message' => 'email_tamu masih kosong',
	    	];
    	}elseif ($isi=='') {
    		$result = [
	    		'status' => false,
	    		'message' => 'isi masih kosong',
	    	];
    	}else {

    		$data=array(
    			'id_feedback'=> '',
    			'nama_tamu'=>$nama_tamu,
    			'kategori'=>$kategori,
    			'email_tamu'=>$email_tamu,
    			'isi'=>$isi,
    		);
    		$this->m->masukanSKK($data,'feedback');

    		$result = [
	    		'status' => true,
	    		'message' => 'Sukses menambah data',
	    	];
    	}
    	echo json_encode($result);
	}
	// 	$data['nama_tamu'] = $this->input->post('nama_tamu', true);
	// 	$data['email_tamu'] = $this->input->post('email_tamu', true);
	// 	$data['kategori'] = $this->input->post('kategori', true);
	// 	$data['isi'] = $this->input->post('isi', true);
	// 	$cek = $this->ModPilihan->masukanSKK($data);
	// 	if ($cek) $this->session->set_flashdata('info','Feedback berhasil dikirim!');
	// 	else $this->session->set_flashdata('info','Feedback gagal dikirim!');
	// 	redirect('pilihan/FormKomentar');
	// }

}
?>
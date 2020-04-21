<?php

class Feedback extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan','m');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	function indexsaran(){
		$data['judul'] = 'Daftar Saran';
		$this->load->view('masukan\LihatSaran',$data);
	}
	public function LihatSaran()
	{
		$dataSaran = $this->m->getAllSaran();
	
		echo json_encode($dataSaran);
	}
	function HapusSaran(){
		$id_feedback= $this->input->post("id_feedback");
		$where=array('id_feedback'=> $id_feedback);
		$dataSaran = $this->m->HapusSaran($where,'feedback');
		 $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataSaran);
	}

	function indexkomentar(){
		$data['judul'] = 'Daftar Komentar';
		$this->load->view('masukan\LihatKomentar',$data);
	}

	public function LihatKomentar()
	{
		$dataKomentar = $this->m->getAllKomentar();
	
		echo json_encode($dataKomentar);
	}

	function HapusKomentar(){
		$id_feedback= $this->input->post("id_feedback");
		$where=array('id_feedback'=> $id_feedback);
		$dataKomentar = $this->m->HapusSaran($where,'feedback');
		 $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataKomentar);
	}

	function indexkritik(){
		$data['judul'] = 'Daftar Kritik';
		$this->load->view('masukan\LihatKritik',$data);
	}

	public function LihatKritik()
	{
		$dataKritik = $this->m->getAllKritik();
	
		echo json_encode($dataKritik);
	}

	function HapusKritik(){
		$id_feedback= $this->input->post("id_feedback");
		$where=array('id_feedback'=> $id_feedback);
		$dataKritik = $this->m->HapusSaran($where,'feedback');
		 $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataKritik);
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
<?php
defined('BASEPATH') OR exit();
class perawat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan','m');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index(){
		
		$data['judul'] = 'Daftar Perawat';
		$this->load->view('perawat\LihatPerawat',$data);
	}
    function indexinfo(){
        $data['judul'] = 'Daftar Perawat';
        $this->load->view('info\DaftarPerawat',$data);
    }
	function LihatPerawat()
	{

        header('Content-Type: application/json');
		$dataPerawat = $this->m->getAllPerawat('perawat')->result();
	       $result = [
            'status' => true,
            'message' => 'data berhasil ditemukan',
            'data' => $dataPerawat
        ];
		echo json_encode($result);

	}
    function searchHandle() {
        header('Content-Type: application/json');
        $params = $this->input->post('keyword');

        $dataPasien = $this->m->getAllPerawatByKey($params)->result();

        $result = [
            'status' => true,
            'message' => 'data Perawat berhasil dicari',
            'data' => $dataPasien
        ];
        echo json_encode($result);
    }
	public function HapusPerawat()
	{
		$id_perawat= $this->input->post("id_perawat");
		$where=array('id_perawat'=> $id_perawat);
		$dataPerawat=$this->m->HapusPerawat($where,'perawat');
		
        $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataPerawat);


	}
	public function TambahPerawat()
	{
    	$nama_perawat=$this->input->post('nama_perawat');

    	$alamat=$this->input->post('alamat');
    	
        $kontak=$this->input->post('kontak');

        if($nama_perawat==''){
            $result = [
                'status' => false,
                'message' => 'Nama perawat masih kosong',
            ];
        }elseif ($alamat=='') {
            $result = [
                'status' => false,
                'message' => 'alamat masih kosong',
            ];
        }elseif ($kontak=='') {
            $result = [
                'status' => false,
                'message' => 'kosong masih kosong',
            ];
        }else {

            $data=array(
                'nama_perawat'=>$nama_perawat,
                'alamat'=>$alamat,
                'kontak'=>$kontak,
            );
            $this->m->TambahPerawat($data,'perawat');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result);
    }

	public function UbahPerawat()
	{
        $id_perawat=$this->input->post('id_perawat');
		$nama_perawat=$this->input->post('nama_perawat');

        $alamat=$this->input->post('alamat');
        
        $kontak=$this->input->post('kontak');
	
        if($nama_perawat==''){
            $result = [
                'status' => false,
                'message' => 'Nama perawat masih kosong',
            ];
        }elseif ($alamat=='') {
            $result = [
                'status' => false,
                'message' => 'alamat masih kosong',
            ];
        }elseif ($kontak=='') {
            $result = [
                'status' => false,
                'message' => 'kosong masih kosong',
            ];
        }else {

            $data=array(

                'nama_perawat'=>$nama_perawat,
                'alamat'=>$alamat,
                'kontak'=>$kontak,
            );
            $where=array('id_perawat'=>$id_perawat);
            $this->m->UpdatePerawat($where,$data,'perawat');

            $result = [
                'status' => true,
                'message' => 'Sukses mengubah data',
            ];
        }
        echo json_encode($result);
    }

	function AmbilIdPerawat(){
			$id_perawat=$this->input->post('id_perawat');
			$where=array('id_perawat'=> $id_perawat);
			$dataPerawat = $this->m->AmbilIdPerawat('perawat',$where)->row();

			echo json_encode($dataPerawat);

    		}
}

?>
<?php
defined('BASEPATH') OR exit();
class pasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan','m');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index(){
		
		$data['judul'] = 'Daftar Pasien';
		$this->load->view('pasien\LihatPasien',$data);
	}
    function indexinfo(){
        
        $data['judul'] = 'Daftar Pasien Info';
        $this->load->view('info\Pasien',$data);
    }

	function LihatPasien()
	{
		$dataPasien = $this->m->getAllPasien('pasien')->result();
	
		echo json_encode($dataPasien);

	}

	public function HapusPasien()
	{
		$id_pasien= $this->input->post("id_pasien");
		$where=array('id_pasien'=> $id_pasien);
		$dataPasien=$this->m->hapuspasien($where,'pasien');
		
        $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataPasien);


	}
	public function TambahPasien()
	{
    	$nama_pasien=$this->input->post('nama_pasien');
    	$tanggal_lahir=$this->input->post('tanggal_lahir');
    	$email=$this->input->post('email');
    	$alamat=$this->input->post('alamat');
    	$kontak=$this->input->post('kontak');

        if($nama_pasien==''){
            $result = [
                'status' => false,
                'message' => 'Nama pasien masih kosong',
            ];
        }elseif ($tanggal_lahir=='') {
            $result = [
                'status' => false,
                'message' => 'tanggal_lahir masih kosong',
            ];
        }elseif ($email=='') {
            $result = [
                'status' => false,
                'message' => 'email masih kosong',
            ];
        }elseif ($alamat=='') {
            $result = [
                'status' => false,
                'message' => 'alamat masih kosong',
            ];
        }elseif ($kontak=='') {
            $result = [
                'status' => false,
                'message' => 'kontak masih kosong',
            ];
        }else {

            $data=array(
                'id_pasien'=> '',
                'nama_pasien'=>$nama_pasien,
                'tanggal_lahir'=>$tanggal_lahir,
                'email'=>$email,
                'alamat'=>$alamat,
                'kontak'=>$kontak,
            );
            $this->m->TambahPasien($data,'pasien');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result);
    }


	public function UbahPasien()
	{
		$id_pasien=$this->input->post('id_pasien');
    	$nama_pasien=$this->input->post('nama_pasien');
    	$tanggal_lahir=$this->input->post('tanggal_lahir');
    	$email=$this->input->post('email');
    	$alamat=$this->input->post('alamat');
    	$kontak=$this->input->post('kontak');

        if($nama_pasien==''){
            $result = [
                'status' => false,
                'message' => 'Nama pasien masih kosong',
            ];
        }elseif ($tanggal_lahir=='') {
            $result = [
                'status' => false,
                'message' => 'tanggal_lahir masih kosong',
            ];
        }elseif ($email=='') {
            $result = [
                'status' => false,
                'message' => 'email masih kosong',
            ];
        }elseif ($alamat=='') {
            $result = [
                'status' => false,
                'message' => 'alamat masih kosong',
            ];
        }elseif ($kontak=='') {
            $result = [
                'status' => false,
                'message' => 'kontak masih kosong',
            ];
        }else {

            

            $data=array(
                'nama_pasien'=>$nama_pasien,
                'tanggal_lahir'=>$tanggal_lahir,
                'email'=>$email,
                'alamat'=>$alamat,
                'kontak'=>$kontak,
            );

            $where=array('id_pasien'=>$id_pasien);
            
            $this->m->UpdatePasien($where,$data,'pasien');

            $result = [
                'status' => true,
                'message' => 'Sukses mengubah  data',
            ];
        }
        echo json_encode($result);
    }

	function AmbilId(){
			$id_pasien=$this->input->post('id_pasien');
			$where=array('id_pasien'=> $id_pasien);
			$dataPasien = $this->m->AmbilId('pasien',$where)->row();

			echo json_encode($dataPasien);

    		}
}

?>
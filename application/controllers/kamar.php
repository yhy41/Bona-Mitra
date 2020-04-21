<?php
defined('BASEPATH') OR exit();
class kamar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan','m');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index(){
		
		$data['judul'] = 'Daftar Kamar';
		$this->load->view('kamar\LihatKamar',$data);
	}
	function LihatKamar()
	{
		$dataKamar = $this->m->getAllKamar('kamar_inap')->result();
	
		echo json_encode($dataKamar);

	}
	public function HapusKamar()
	{
		$id_kamar= $this->input->post("id_kamar");
		$where=array('id_kamar'=> $id_kamar);
		$dataKamar = $this->m->HapusKamar($where,'kamar_inap');
		  
          $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result);

	}
	public function TambahKamar()
	{
    	$nama_kamar=$this->input->post('nama_kamar');


    	if($nama_kamar==''){
            $result = [
                'status' => false,
                'message' => 'Nama kamar masih kosong',
            ];
        }else {

            $data=array(
                'id_kamar'=> '',
                'nama_kamar'=>$nama_kamar,
            );
            $this->m->TambahKamar($data,'kamar_inap');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result);
    }


	public function UbahKamar()
	{

        $id_kamar=$this->input->post('id_kamar');
		
        $nama_kamar=$this->input->post('nama_kamar');

        if($nama_kamar==''){
            $result = [
                'status' => false,
                'message' => 'Nama kamar masih kosong',
            ];
        }else {

            $data=array(
                'nama_kamar'=>$nama_kamar,
            );
            $where=array('id_kamar'=>$id_kamar);

            $this->m->UpdateKamar($where,$data,'kamar_inap');

            $result = [
                'status' => true,
                'message' => 'Sukses mengubah data',
            ];
        }
        echo json_encode($result);
    }



	

	function AmbilIdKamar(){

			$id_kamar=$this->input->post('id_kamar');
			$where=array('id_kamar'=> $id_kamar);
			$dataKamar = $this->m->AmbilIdKamar('kamar_inap',$where)->row();

			echo json_encode($dataKamar);

    		}
}

?>
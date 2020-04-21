<?php
defined('BASEPATH') OR exit();
class dokter extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ModPilihan','m');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index(){
		
		$data['judul'] = 'Daftar Dokter';
		$this->load->view('dokter\LihatDokter',$data);
	}
    function indexinfo(){
        
        $data['judul'] = 'Daftar Dokter Info';
        $this->load->view('Info\DaftarDokter',$data);
    }
	function LihatDokter()
	{
		$dataDokter = $this->m->getAllDokter('dokter')->result();
	
		echo json_encode($dataDokter);

	}
	public function HapusDokter()
	{
		$id_dokter= $this->input->post("id_dokter");
		$where=array('id_dokter'=> $id_dokter);
		$dataDokter = $this->m->HapusDokter($where,'dokter');
		 $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataDokter);

	}
	public function TambahDokter()
	{
    	$nama_dokter=$this->input->post('nama_dokter');

    	$alamat=$this->input->post('alamat');
    	
        $kontak=$this->input->post('kontak');


    if($nama_dokter==''){
            $result = [
                'status' => false,
                'message' => 'Nama dokter masih kosong',
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
                'nama_dokter'=>$nama_dokter,
                'alamat'=>$alamat,
                'kontak'=>$kontak,
            );
            $this->m->TambahDokter($data,'dokter');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result);
    }




	public function UbahDokter()
	{
        $id_dokter=$this->input->post('id_dokter');
		$nama_dokter=$this->input->post('nama_dokter');

        $alamat=$this->input->post('alamat');
        
        $kontak=$this->input->post('kontak');

        if($nama_dokter==''){
            $result = [
                'status' => false,
                'message' => 'Nama dokter masih kosong',
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

                'nama_dokter'=>$nama_dokter,
                'alamat'=>$alamat,
                'kontak'=>$kontak,
            );
            $where=array('id_dokter'=>$id_dokter);
            $dataDokter=$this->m->UpdateDokter($where,$data,'dokter');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result,$dataDokter);
    }
           

	

	function AmbilIdDokter(){
			$id_dokter=$this->input->post('id_dokter');
			$where=array('id_dokter'=> $id_dokter);
			$dataDokter = $this->m->AmbilIdDokter('dokter',$where)->row();

			echo json_encode($dataDokter);

    		}
}

?>
<?php
defined('BASEPATH') OR exit();
class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModPilihan','m');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Dokter';
		$this->load->view('jadwal\Lihat_Jadwal',$data);
	}
	function LihatJadwal(){

         header('Content-Type: application/json');
            $dataJadwal = $this->m->getAllJadwal('jadwal_dokter')->result();
            $result = [
            'status' => true,
            'message' => 'data berhasil ditemukan',
            'data' => $dataJadwal
        ];
        echo json_encode($result);

	}

	function HapusJadwal(){
		$id_jadwal= $this->input->post("id_jadwal");
		$where=array('id_jadwal'=> $id_jadwal);
		$dataJadwal = $this->m->HapusJadwal($where,'jadwal_dokter');
		 $result = [
                'status' => true,
                'message' => 'Sukses hapus data',
            ];

        echo json_encode($result,$dataJadwal);

	}

    function searchHandle() {
        header('Content-Type: application/json');
        $params = $this->input->post('keyword');

        $dataJadwal = $this->m->getAllJadwalByKey($params)->result();

        $result = [
            'status' => true,
            'message' => 'data Jadwal berhasil dicari',
            'data' => $dataJadwal
        ];
        echo json_encode($result);
    }

	public function TambahJadwal()
	{
		
		$hari=$this->input->post('hari');

    	$jam_mulai=$this->input->post('jam_mulai');
    	
        $jam_selesai=$this->input->post('jam_selesai');


    if($hari==''){
            $result = [
                'status' => false,
                'message' => 'Hari Jadwal masih kosong',
            ];
        }elseif ($jam_mulai=='') {
            $result = [
                'status' => false,
                'message' => 'jam_mulai masih kosong',
            ];
        }elseif ($jam_selesai=='') {
            $result = [
                'status' => false,
                'message' => 'jam_selesai masih kosong',
            ];
        }else {

            $data=array(
                'hari'=>$hari,
                'jam_mulai'=>$jam_mulai,
                'jam_selesai'=>$jam_selesai,
            );
            $this->m->TambahJadwal($data,'jadwal_dokter');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result);
    }



	public function ubah($id)
	{
		$id_jadwal=$this->input->post('id_jadwal');

		$hari=$this->input->post('hari');

    	$jam_mulai=$this->input->post('jam_mulai');
    	
        $jam_selesai=$this->input->post('jam_selesai');


    if($hari==''){
            $result = [
                'status' => false,
                'message' => 'Hari Jadwal masih kosong',
            ];
        }elseif ($jam_mulai=='') {
            $result = [
                'status' => false,
                'message' => 'jam_mulai masih kosong',
            ];
        }elseif ($jam_selesai=='') {
            $result = [
                'status' => false,
                'message' => 'jam_selesai masih kosong',
            ];
        }else {

            $data=array(
                'hari'=>$hari,
                'jam_mulai'=>$jam_mulai,
                'jam_selesai'=>$jam_selesai,
            );
             $where=array('id_dokter'=>$id_dokter);
            $this->m->UbahJadwal($data,'jadwal_dokter');

            $result = [
                'status' => true,
                'message' => 'Sukses menambah data',
            ];
        }
        echo json_encode($result);
    }

	function AmbilIdJadwal(){
			$id_jadwal=$this->input->post('id_jadwal');
			$where=array('id_jadwal'=> $id_jadwal);
			$dataJadwal = $this->m->AmbilId('jadwal_dokter',$where)->row();

			echo json_encode($dataJadwal);

    		}
}
?>


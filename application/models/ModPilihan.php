<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModPilihan extends CI_Model {
    function __construct() {
        parent::__construct(); 
    
    }
    public function inputdokter($data)
	{
		return $this->db->insert('dokter', $data);
	}
	public function getAllDokter()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('dokter')->result_array();
	}
	public function hapusDataDokter($id_dokter)
	{
		//use query builder to delete data based on id 
		$this->db->where('id_dokter', $id_dokter);
		return $this->db->delete('dokter');
	}

 	public function ubahDataDokter($id_dokter){
 		$data = [
			'nama_dokter' => $this->input->post('nama_dokter', true),
			'kontak'=> $this->input->post('kontak', true),
			'alamat' => $this->input->post('alamat', true),
		];
		$this->db->where('id_dokter', $id_dokter);
		//use query builder class to update data mahasiswa based on id
		return $this->db->update('dokter', $data);
 	}
 	public function getDokterById($id_dokter)
	{
		//get data mahasiswa based on id 
		$this->db->where('id_dokter', $id_dokter);
		return $this->db->get('dokter')->row_array();
	}
	public function cariDataDokter()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		// $where = "id_dokter='$keyword' OR nama_dokter='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		// $this->db->where($where);
		return $this->db->like('id_dokter',$keyword)->or_like('nama_dokter',$keyword)->or_like('alamat',$keyword)->get('dokter')->result_array();
		//return data mahasiswa that has been searched
	}
	//////////////////////////////////////////////////////////// Perawat////////////////////////////////////////
	public function inputperawat($data)
	{
		return $this->db->insert('perawat', $data);
	}
	public function getAllPerawat()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('perawat')->result_array();
	}
	public function hapusDataPerawat($id_perawat)
	{
		//use query builder to delete data based on id 
		$this->db->where('id_perawat', $id_perawat);
		return $this->db->delete('perawat');
	}

 	public function ubahDataPerawat($id_perawat){
 		$data = [
			'nama_perawat' => $this->input->post('nama_perawat', true),
			'kontak'=> $this->input->post('kontak', true),
			'alamat' => $this->input->post('alamat', true),
		];
		$this->db->where('id_perawat', $id_perawat);
		//use query builder class to update data mahasiswa based on id
		return $this->db->update('perawat', $data);
 	}
 	public function getPerawatById($id_perawat)
	{
		//get data mahasiswa based on id 
		$this->db->where('id_perawat', $id_perawat);
		return $this->db->get('perawat')->row_array();
	}
	public function cariDataPerawat()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		// $where = "id_perawat='$keyword' OR nama_perawat='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		// $this->db->where($where);
		return $this->db->like('id_perawat',$keyword)->or_like('nama_perawat',$keyword)->or_like('alamat',$keyword)->get('perawat')->result_array();
		//return data mahasiswa that has been searched
	}



	///////////////////////////////////////PASIEN///////////////////////////////////////////////////////////
	public function inputpasien($data)
	{
		return $this->db->insert('pasien', $data);
	}
	public function getAllPasien()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('pasien')->result_array();
	}
	public function hapusDataPasien($id_pasien)
	{
		//use query builder to delete data based on id 
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->delete('pasien');
	}

 	public function ubahDataPasien($id_pasien){
 		$data = [
			'nama_pasien' => $this->input->post('nama_pasien', true),
			'tanggal_lahir'=> $this->input->post('tanggal_lahir', true),
			'kontak'=> $this->input->post('kontak', true),
			'email'=> $this->input->post('email', true),
			'alamat' => $this->input->post('alamat', true),
		];
		$this->db->where('id_pasien', $id_pasien);
		//use query builder class to update data mahasiswa based on id
		return $this->db->update('pasien', $data);
 	}
 	public function getPasienById($id_pasien)
	{
		//get data mahasiswa based on id 
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->get('pasien')->row_array();
	}
	public function cariDataPasien()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		// $where = "id_pasien='$keyword' OR nama_pasien='$keyword' OR tanggal_lahir='$keyword' OR email='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		return $this->db->like('nama_pasien',$keyword)->or_like('tanggal_lahir',$keyword)->or_like('email',$keyword)->or_like('alamat',$keyword)->or_like('kontak',$keyword)->get('pasien')->result_array();
		//return data mahasiswa that has been searched
	}

	/////////////////////////////////////////////Guest////////
 	public function masukanSKK($data)
	{
		return $this->db->insert('feedback', $data);
	}

	/////////////////////////////////////////////////KAMAR///////////////////////////////////////////////////////////
	public function getAllKamar()
	{
		return $this->db->get('kamar_inap')->result_array();
	}

	public function getKamarById($id_kamar)
	{
		$this->db->where('id_kamar', $id_kamar);
		return $this->db->get('kamar_inap')->row_array();
	}

	public function addDataKamar()
	{
		$data = [
			"nama_kamar" => $this->input->post('nama_kamar', true),
		];
		return $this->db->insert('kamar_inap', $data);
	}

	public function deleteDataKamar($id_kamar)
	{
		$this->db->where('id_kamar', $id_kamar);
		return $this->db->delete('kamar_inap');
	}

	public function changeDataKamar($id_kamar)
	{
		$data = [
			"nama_kamar" => $this->input->post('nama_kamar', true),
		];
		$this->db->where('id_kamar', $id_kamar);
		return $this->db->update('kamar_inap', $data);
	}

	public function searchDataKamar()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "nama_kamar='$keyword'";
		$this->db->where($where);
		return $this->db->get('kamar_inap')->result_array();
	}

	///////////////////////////////////////JADWAL///////////////////////////////////////////////////////////
	public function getAllJadwal()
	{
		return $this->db->get('jadwal_dokter')->result_array();
	}

	public function tambahJadwal($data)
	{
		// $data = [
		// 	"hari" => $this->input->post('hari', true),
		// 	"jam_mulai" => $this->input->post('jam_mulai', true),
		// 	"jam_selesai" => $this->input->post('jam_selesai', true),
		// ];

		return $this->db->insert('jadwal_dokter',$data);
	}

	public function hapusJadwal($id)
	{
		$this->db->where('id_jadwal',$id);
		return $this->db->delete('jadwal_dokter');
	}

	public function getJadwalById($id)
	{
		$this->db->where('id_jadwal',$id);
		return $this->db->get('jadwal_dokter')->row_array();
	}

	public function ubahJadwal($id)
	{
		$data = [
			"hari" => $this->input->post('hari', true),
			"jam_mulai" => $this->input->post('jam_mulai', true),
			"jam_selesai" => $this->input->post('jam_selesai', true),
		];
		
		$this->db->where('id_jadwal',$id);
		return $this->db->update('jadwal_dokter',$data);
	}

	public function cariJadwal()
	{
		$keyword = $this->input->post('keyword', true);
		return $this->db->like('hari',$keyword)->or_like('jam_mulai',$keyword)->or_like('jam_selesai',$keyword)->get('jadwal_dokter')->result_array();

	}

	///////////////////////////////////////FEEDBACK///////////////////////////////////////////////////////////
	public function getAllSaran()
	{
		return $this->db->where('kategori','Saran')->get('feedback')->result_array();
	}

	public function getAllKomentar()
	{
		return $this->db->where('kategori','Komentar')->get('feedback')->result_array();
	}

	public function getAllKritik()
	{
		return $this->db->where('kategori','Kritik')->get('feedback')->result_array();
	}

	public function hapusFeedback($id)
	{
		$this->db->where('id_feedback',$id);
		return $this->db->delete('feedback');
	}

	public function hapusSemua($kategori)
	{
		return $this->db->where('kategori',$kategori)->empty_table('feedback');
	}


	///////////////////////////////////////PLOTTING///////////////////////////////////////////////////////////
	public function getAllPlot()
	{
		$SQL = "SELECT * FROM plotting_dokter A, dokter B, jadwal_dokter C WHERE A.id_dokter=B.id_dokter AND A.id_jadwal=C.id_jadwal";
		return $this->db->query($SQL)->result_array();
	}

	public function tambahPlotting($id_jadwal,$id_dokter)
	{
		$data['id_jadwal'] = $id_jadwal;
		$data['id_dokter'] = $id_dokter;

		return $this->db->insert('plotting_dokter',$data);
	}

	public function hapusPlot($id)
	{
		$this->db->where('id_plotting',$id);
		return $this->db->delete('plotting_dokter');
	}

	public function cariPlot() //belum works
	{
		$keyword = $this->input->post('keyword', true);

		$SQL = "SELECT * FROM plotting_dokter A, dokter B, jadwal_dokter C WHERE A.id_dokter=B.id_dokter AND A.id_jadwal=C.id_jadwal AND (B.nama_dokter LIKE '$keyword' OR C.hari LIKE '$keyword' OR C.jam_mulai LIKE '$keyword' OR C.jam_selesai LIKE '$keyword')";

		return $this->db->query($SQL)->result_array();
	}
 }
?>
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
		$where = "id_dokter='$keyword' OR nama_dokter='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		$this->db->where($where);
		return $this->db->get('dokter')->result_array();
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
		$where = "id_perawat='$keyword' OR nama_perawat='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		$this->db->where($where);
		return $this->db->get('perawat')->result_array();
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
			'nama_pasien' => $this->input->post('nama_dokter', true),
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
		$where = "id_pasien='$keyword' OR nama_pasien='$keyword' OR tanggal_lahir='$keyword' OR email='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		$this->db->where($where);
		return $this->db->get('pasien')->result_array();
		//return data mahasiswa that has been searched
	}

	/////////////////////////////////////////////Guest////////
 public function masukanSKK($data)
	{
		return $this->db->insert('feedback', $data);
	}
 }

 
?>
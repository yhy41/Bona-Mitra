<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModPilihan extends CI_Model {
    function __construct() {
        parent::__construct(); 
    
    }
    public function getPlotDokter()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('dokter')->result_array();
	}

	function getAllPlotJadwal(){
		return $this->db->get('jadwal_dokter')->result_array();
	}

   public function TambahDokter($data,$table)
	{	

		$this->db->insert('dokter',$data);
	}
	function AmbilIdDokter($table,$where){

		return $this->db->get_where($table,$where);
		
	}
	function getAllDokter($table)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get($table);
	}

	function UpdateDokter($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	public function hapusdokter($where,$table)
	{
		//use query builder to delete data based on id 

		$this->db->where($where);
		$this->db->delete($table);
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



public function TambahPerawat($data,$table)
	{	

		$this->db->insert('perawat',$data);
	}
	function AmbilIdPerawat($table,$where){

		return $this->db->get_where($table,$where);
		
	}
	function getAllPerawat($table)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get($table);
	}

	function UpdatePerawat($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	public function hapusperawat($where,$table)
	{
		//use query builder to delete data based on id 

		$this->db->where($where);
		$this->db->delete($table);
	}


	


	///////////////////////////////////////PASIEN///////////////////////////////////////////////////////////


	public function TambahPasien($data,$table)
	{	

		$this->db->insert('pasien',$data);
	}
	function AmbilId($table,$where){

		return $this->db->get_where($table,$where);
		
	}
	function getAllPasien($table)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get($table);
	}

	function getAllPasienByKey($params)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->like('nama_pasien', $params, 'both')->or_like('email', $params, 'both')->get('pasien');
	}


	function getAllKamarByKey($params)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->like('nama_kamar', $params, 'both')->get('kamar_inap');
	}

	function getAllDokterByKey($params)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->like('nama_dokter', $params, 'both')->or_like('alamat', $params, 'both')->get('dokter');
	}
	function getAllPerawatByKey($params)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->like('nama_perawat', $params, 'both')->or_like('alamat', $params, 'both')->get('perawat');
	}
	function getAllJadwalByKey($params)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->like('hari', $params, 'both')->get('jadwal_dokter');
	}

	function UpdatePasien($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}



	public function hapuspasien($where,$table)
	{
		//use query builder to delete data based on id 

		$this->db->where($where);
		$this->db->delete($table);
	}

 	public function ubahDataPasien($data_pasein){
 		$data_pasein = [
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
		// $where = "id_pasien='$keyword' OR nama_pasien='$keyword' OR tanggal_lahir='$keyword' OR email='$keyword' OR alamat='$keyword' OR kontak='$keyword'";
		// $this->db->where($where);
		// return $this->db->get('pasien')->result_array();
		return $this->db->like('nama_pasien',$keyword)->or_like('tanggal_lahir',$keyword)->or_like('email',$keyword)->or_like('alamat',$keyword)->or_like('kontak',$keyword)->get('pasien')->result_array();
		//return data mahasiswa that has been searched
	}






	/////////////////////////////////////////////Guest///////////////////////////////////////////////////
 	public function masukanSKK($data,$table)
	{
		$this->db->insert('feedback', $data);
	}



	/////////////////////////////////////////////////KAMAR///////////////////////////////////////////////////////////

	
	public function TambahKamar($data,$table)
	{	

		$this->db->insert('kamar_inap',$data);
	}
	function AmbilIdKamar($table,$where){

		return $this->db->get_where($table,$where);
		
	}
	function getAllKamar($table)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get($table);
	}

	function UpdateKamar($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	public function hapusKamar($where,$table)
	{
		//use query builder to delete data based on id 

		$this->db->where($where);
		$this->db->delete($table);
	}
	



	public function getKamarById($id_kamar)
	{
		$this->db->where('id_kamar', $id_kamar);
		return $this->db->get('kamar_inap')->row_array();
	}

	public function searchDataKamar()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "nama_kamar='$keyword'";
		$this->db->where($where);
		return $this->db->get('kamar_inap')->result_array();
	}


	///////////////////////////////////////JADWAL///////////////////////////////////////////////////////////
	public function getAllJadwal($table)
	{
		return $this->db->get($table);	
	}

	public function tambahJadwal($data)
	{

		return $this->db->insert('jadwal_dokter',$data);
	}

	public function hapusJadwal($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
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
		// return $this->db->get($table);
	}

	function HapusSaran($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getAllKomentar()
	{
		return $this->db->where('kategori','Komentar')->get('feedback')->result_array();
	}

	function  HapusKomentar($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getAllKritik()
	{
		return $this->db->where('kategori','Kritik')->get('feedback')->result_array();
	}

	function  HapusKritik($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
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
	function getAllPlotPLot($table)
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get($table);
	}

	public function getAllPlot()
	{
		$SQL = "SELECT * FROM plotting_dokter A, dokter B, jadwal_dokter C WHERE A.id_dokter=B.id_dokter AND A.id_jadwal=C.id_jadwal";
		return $this->db->query($SQL)->result_array();
	}

	public function getPlotHome(){
		$SQL = "SELECT * FROM plotting_dokter A, dokter B, jadwal_dokter C WHERE A.id_dokter=B.id_dokter AND A.id_jadwal=C.id_jadwal";
		return $this->db->query($SQL)->result_array();
		$SQL = "SELECT * FROM rawat_inap A, kamar_inap B, pemeriksaan C, pasien D, dokter E WHERE A.id_kamar=B.id_kamar AND               A.id_pemeriksaan=C.id_pemeriksaan AND C.id_pasien=D.id_pasien AND C.id_dokter=E.id_dokter";
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

		$SQL = "SELECT * FROM plotting_dokter A, dokter B, jadwal_dokter C WHERE A.id_dokter=B.id_dokter AND A.id_jadwal=C.id_jadwal AND (B.nama_dokter LIKE '%$keyword%' OR C.hari LIKE '%$keyword%' OR C.jam_mulai LIKE '%$keyword$' OR C.jam_selesai LIKE '%$keyword%')";

		return $this->db->query($SQL)->result_array();
	}





	///////////////////////////////////////PEMERIKSAAN///////////////////////////////////////////////////////////
	public function getAllPemeriksaan()
	{
		$SQL = "SELECT * FROM pemeriksaan A, dokter B, pasien C WHERE A.id_dokter=B.id_dokter AND A.id_pasien=C.id_pasien";
		return $this->db->query($SQL)->result_array();
	}

	public function getPemeriksaanById($id)
	{
		$SQL = "SELECT * FROM pemeriksaan A, dokter B, pasien C WHERE A.id_dokter=B.id_dokter AND A.id_pasien=C.id_pasien AND A.id_pemeriksaan='$id'";
		return $this->db->query($SQL)->row_array();
	}

	public function getPasienPeriksa()
	{
		return $this->db->get('pasien')->result_array();
	}

	public function getDokterPeriksa()
	{
		return $this->db->get('dokter')->result_array();
	}

	public function tambahPemeriksaan($data)
	{
		return $this->db->insert('pemeriksaan',$data);
	}

	public function hapusPemeriksaan($id)
	{
		$this->db->where('id_pemeriksaan',$id);
		return $this->db->delete('pemeriksaan');
	}

	public function cariPemeriksaan()
	{
		$keyword = $this->input->post('keyword', true);

		$SQL = "SELECT * FROM pemeriksaan A, dokter B, pasien C WHERE A.id_dokter=B.id_dokter AND A.id_pasien=C.id_pasien AND ( B.nama_dokter LIKE '%$keyword%' OR C.nama_pasien LIKE '%$keyword%' OR A.deskripsi LIKE '%$keyword%' OR A.tanggal LIKE '%$keyword%')";

		return $this->db->query($SQL)->result_array();
	}

	///////////////////////////////////////RAWAT INAP///////////////////////////////////////////////////////////
	public function getAllRawatInap()
	{
		$SQL = "SELECT * FROM rawat_inap A, kamar_inap B, pemeriksaan C, pasien D, dokter E WHERE A.id_kamar=B.id_kamar AND               A.id_pemeriksaan=C.id_pemeriksaan AND C.id_pasien=D.id_pasien AND C.id_dokter=E.id_dokter";
		return $this->db->query($SQL)->result_array();
	}

	public function getKamarRawat()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('kamar_inap')->result_array();
	}

	public function tambahRawatInap($data)
	{
		return $this->db->insert('rawat_inap',$data);
	}

	public function hapusRawatInap($id)
	{
		$this->db->where('id_rawat_inap',$id);
		return $this->db->delete('rawat_inap');
	}

	public function cariRawatInap()
	{
		$keyword = $this->input->post('keyword', true);

		$SQL = "SELECT * FROM rawat_inap A, kamar_inap B, pemeriksaan C, pasien D, dokter E WHERE A.id_kamar=B.id_kamar AND               A.id_pemeriksaan=C.id_pemeriksaan AND C.id_pasien=D.id_pasien AND C.id_dokter=E.id_dokter AND (B.nama_kamar LIKE '%$keyword%' OR E.nama_dokter LIKE '%$keyword%' OR D.nama_pasien LIKE '%$keyword%' OR C.deskripsi LIKE '%$keyword%' OR A.tanggal_masuk LIKE '%$keyword%' OR A.tanggal_keluar LIKE '%$keyword%')";

		return $this->db->query($SQL)->result_array();
	}

 }
?>
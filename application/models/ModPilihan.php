<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModPilihan extends CI_Model {
    function __construct() {
        parent::__construct(); 
    
    }
    public function inputdokter()
	{
		$data = [
			"id_dokter" => $this->input->post('id_dokter', true),
			"nama_dokter" => $this->input->post('nama_dokter', true),
			"kontak" => $this->input->post('kontak', true),
			"alamat" => $this->input->post('alamat', true),
		];
		return $this->db->insert('dokter', $data);
		//use query builder to insert $data to table "mahasiswa"
	}

 
 }
?>
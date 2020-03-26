<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class ProducModel extends CI_Model {
		function__construct(){
			parent::__construct();
		}
	public function get_all(){
		return $this->db->get('produk')->result_array();
	}
	public function get_product($id_produk){
		$this->db->where('id_produk',$id_produk);
		return $this->db->get('produk')->row_array();
	}
	public function insert_produk($data){
		return $this->db->insert('produk',$data);
	}
	
	}
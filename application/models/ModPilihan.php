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

 
 }
?>
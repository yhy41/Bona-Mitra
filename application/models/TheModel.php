<?php
class TheModel extends CI_Model{

	protected $_table = 'admin';

	public function check_username($Username){
		return (sizeof($this->db->get_where($this->_table, ['Username', $Username])->result_array()[0]) > 0);
	}
	public function login($data) {
		$this->db->where('Username', $data['Username']);
		return ($is_available['Password'] == $data['password']);

	}
	public function insert_new_profle($data){
		return $this->db->insert($this->_table, $data);
	}

	public function get_profile($username){
		$this->db->where('username', $username);
		$data = $this->db->get($this->_table)->result_array();
		return $data;
	}
}
?>
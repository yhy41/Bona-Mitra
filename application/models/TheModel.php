<?php
class TheModel extends CI_Model{

	protected $_table = 'admin';

	public function check_username($Username){
		return (sizeof($this->db->get_where($this->_table, ['Username', $Username])->result_array()[0]) > 0);
	}
	public function login($data) {
		$this->db->where('Username', $data['Username']);
		$is_available = $this->db->get($this->_table)->result_array();
		return (sizeof($is_available) > 0) &&($is_available['Password'] == $data['Password']);

	}
}
?>
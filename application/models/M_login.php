<?php
Class M_login extends CI_Model {



// Read data using username and password
public function login($data) {
	
	//$condition = "";
	$this->db->select('*');
	$this->db->from('crm_user');
	$this->db->where(" user_email =" . "'" . $data['username'] . "' AND " . "user_password =" . "md5('" . $data['password'] . "')");
	
	//$this->db->limit(1);
	//$query = $this->db->query("select count(*) as a from crm_user where user_email =" . "'" . $data['username'] . "' AND " . "user_password =" . "md5('" . $data['password'] . "')");
	//$result = $query->result_array();
	
	$query=$this->db->get();
	//print_r($query);
	//exit();
	
	if ($query->num_rows() == 1) {
		return true;
	} else {
		return false;
	}
}

// Read data from database to show data in admin page
public function read_user_information($username) {

	
	$this->db->select('*');
	$this->db->from('crm_user');
	$this->db->where("user_email =" . "'" . $username . "'");
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
		return $query->result();
	} else {
		return false;
	}
}

}
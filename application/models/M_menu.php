<?php
Class M_menu extends CI_Model {



// Read data using username and password
public function listmenu() {
	
	//$condition = "";
	$this->db->select('*');
	$this->db->from('crm_mainmenu');
	//$this->db->where(" user_email =" . "'" . $data['username'] . "' AND " . "user_password =" . "md5('" . $data['password'] . "')");
	

		$query=$this->db->get();
		$result=$query->result();
		//var_dump($query);exit();
		return $result ;
	}
	
}


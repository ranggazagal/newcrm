<?php
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
			$this->load->library('session');
			$this->load->database(); 			// load database
			$this->load->model('M_menu'); 	// load model
	}
	public function index() {
			$this->data['menu'] = $this->M_menu->listmenu();
			//echo $thismysession['email'];
			//exit();
			$this->load->view('v_home', $this-> data);
		}

	
}

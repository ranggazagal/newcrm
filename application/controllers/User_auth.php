<?php
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->library('form_validation');
		  $this->load->database();
          //load the login model
		  $this->load->model('m_login');
	}
	public function index() {
			$this->load->view('v_header');
			$this->load->view('v_login');
		}


		public function user_login_process() {

				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$result = $this->m_login->login($data);
				
				if ($result == TRUE) {

					$username = $this->input->post('username');
					$result = $this->m_login->read_user_information($username);
					
					if ($result != false) {
						/*$session_data = array(
							'username' => $result[0]->user_fname,
							'email' => $result[0]->user_email,
							//'apikey' => $result[0]->user_apikey,
							'role' => $result[0]->user_role,
						);*/
						// Add user data in session
						$this->session->set_userdata('username',$result[0]->user_fname);
						$this->session->set_userdata('email',$result[0]->user_email);
						$this->session->set_userdata('role',$result[0]->user_role);
						redirect('/dashboard', 'refresh');
					}
				} else {
					$data = array(
						'error_message' => 'Invalid Username or Password'
					);
					$this->load->view('v_header');
					$this->load->view('v_wrongpass_modal');
					$this->load->view('v_login');
				}
			
		}

		// Logout from admin page
		public function logout() {

		// Removing session data
			$sess_array = array(
				'username' => '',
				'email' => '',
				'apikey' => '',
				'role' => '',
			);
			$this->session->unset_userdata($sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect('/', 'refresh');
		}

		
	
}

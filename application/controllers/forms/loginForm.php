<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginForm extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');  		
		$this->load->model('accounts/user_model');		
	}
	
	/*
	 * validates user login
	 * 
	 */
    function validate_credentials() {
		
		$query = $this->user_model->validate();
		
		if($query) { 
			/**
			 *  if valid credentials, check type of user
			 */
			$userType = $this->user_model->getUserType();
			$data = array(
				'username' => $this->input->post('username'),
				'usertype' => $userType,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			
		}
		redirect('home/index');
	}
    
	/**
	 *  destroy session at log out
	 */
	function logout() {  
        $this->session->sess_destroy();  
        redirect('home/index');
    }  
	
}
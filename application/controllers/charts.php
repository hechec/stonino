<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author Harvey Jake G. Opena
 * 		   May 2012
 */
class Charts extends MY_Controller {
	
	public function __construct(){
		parent::__construct();	
		$this->load->helper('url');  
		$this->load->library('form_validation');
	}
	
	
	public function index() {
		$data['body'] = $this->load->view('charts', '', true);
		$data['title'] = 'Sto. Nino Charts';
		$this->load->view('template', $data);
	}	
	
	/**
	 * 
	 * 
	 */
	
	public function get() {
		echo json_encode( array(
							'one' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 30),
							'two' => array(-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5),
							'three' => array(-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0),
							'four' => array(3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8),
						 ));
	}
}		
	
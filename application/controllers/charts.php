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
		echo json_encode(array('chart' => 'a'));
	}
}		
	
<?php


class Confirmation extends  MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
		
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array());	
	}
	
	public function index() {
		$data['body'] = $this->load->view('records/confirmation', '', true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
}

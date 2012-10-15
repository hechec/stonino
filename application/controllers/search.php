<?php


class Search extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
		
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array('records/person_model'));	
	}
	
	public function index() {
		$data['body'] = $this->load->view('records/search', '', true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	public function searchMe() {
		$query = $_POST['query'];
		$results['results'] = $this->person_model->search($query);
		$html = $this->load->view('includes/search_results', $results, true);
		echo json_encode( array('html' => $html) );
	}
	
}

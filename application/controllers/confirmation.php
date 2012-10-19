<?php


class Confirmation extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
		
		$this->load->helper( array('form', 'url', 'my_helper'));  
		
		$this->load->model( array('confirmation_model', 'confirmation_godparent_model'));	
	}
	
	public function save() {
		
		$confirmation = array(
							'id' => $_POST['id'],
							'confirmation_date' => $_POST['confirmation_date'],
							'minister' => $_POST['minister'],
							'remarks' => $_POST['remarks'],
							'book_number' => $_POST['book_number'],
							'page_number' => $_POST['page_number'],
							'line_number' => $_POST['line_number'],
							);
		
		$this->confirmation_model->save($confirmation);
		
		$person['id'] = $_POST['id'];
		$person['confirmation'] = $this->confirmation_model->get($_POST['id']);
		
		$confirmationView = $this->load->view('records/confirmation', $person, true);
		
		//$confirmationView = "WEW";
		echo json_encode( array('html' => $confirmationView) );
	}
	
}
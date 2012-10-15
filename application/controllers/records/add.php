<?php


class Add extends  MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
			
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array('records/person_model'));	
	}
	
	public function index() {
		$data['body'] = $this->load->view('forms/person_form', '', true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	public function addMe() {
		$person = array('firstname' => $this->input->post('firstname'),
						'middlename' => $this->input->post('middlename'),
						'lastname' => $this->input->post('lastname'),
						'extensionname' => $this->input->post('extensionname'),
						'birthplace' => $this->input->post('birthplace'),
						'birthday' => $this->input->post('birthday'),
						'gender' => $this->input->post('gender'),
						'civilstatus' => $this->input->post('civilstatus'),
						'residence' => $this->input->post('residence')
					  );
					  
	 	$this->person_model->save($person);
		redirect('home');
	}
	
}

<?php


class Profile extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
		
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array('records/person_model'));	
	}
	
	public function index($pid) {
		$person = $this->person_model->get($pid);
		$data['body'] = $this->load->view('records/profile', $person, true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	public function add() {
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
					  
	 	$pid = $this->person_model->save($person);
		$this->index($pid);
	}
	
	public function edit($pid) {
		$person = $this->person_model->get($pid);
		$data['body'] = $this->load->view('forms/person_form', $person, true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	public function updateMe($pid) {
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
		$this->person_model->update($pid, $person);		  
		$this->index($pid);
	}
	
}
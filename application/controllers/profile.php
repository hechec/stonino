<?php


class Profile extends MY_Controller {
	const MOTHER = 'female';
	const FATHER = 'male';
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
		
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array('person_model', 'parent_model', 'baptismal_model', 'baptismal_godparent_model'));	
	}
	
	/**
	 *  show profile page
	 */
	public function index($pid) {
		$profile['person'] = $this->person_model->get($pid);
		
		$parents = $this->parent_model->getParents($pid);
		$profile['mother'] = Profile::extractParent($parents, Profile::MOTHER);
		$profile['father'] = Profile::extractParent($parents, Profile::FATHER);
		
		$person['id'] = $pid;
		$person['baptismal'] = $this->baptismal_model->get($pid);
		$godparents = $this->baptismal_godparent_model->get($pid);
		$person['baptismal_godparent_1'] = Profile::extractGodparent($godparents, 1); 
		$person['baptismal_godparent_2'] = Profile::extractGodparent($godparents, 2);
		
		if( isset($person['baptismal']) )
			$profile['baptismal'] = $this->load->view('records/baptismal', $person, true);
		else
			$profile['baptismal'] = $this->load->view('forms/baptismal_form', $person, true);
			
		$data['body'] = $this->load->view('records/profile', $profile, true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	/**
	 * show add form
	 */
	public function add() {
		$data['body'] = $this->load->view('forms/person_form', '', true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	/**
	 * show edit person_form
	 */
	public function edit($pid) {
		$profile['person'] = $this->person_model->get($pid);
		
		$parents = $this->parent_model->getParents($pid);
		
		$profile['mother'] = Profile::extractParent($parents, Profile::MOTHER);
		$profile['father'] = Profile::extractParent($parents, Profile::FATHER);
		
		$data['body'] = $this->load->view('forms/person_form', $profile, true);
		$data['title'] = 'Sto. Nino Forms';
		$this->load->view('template', $data);
	}
	
	/**
	 *  add/update stonino.person table 
	 *  $pid = null if add
	 */
	public function save($pid = null) {
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
					  
		if( !isset($pid) )
			$pid = $this->person_model->save($person);
		else
			$this->person_model->update($pid, $person);				  
		
		$parents = array();
		$mother = null;
		$father = null;
		if( $this->input->post('mother') != '' ){
			$mother = array(
							'id' => $pid,
							'fullname' => $this->input->post('mother'),  	
							'gender' => 'female',
							'residence' => $this->input->post('mother_residence') 
							);
			array_push($parents, $mother);
		}	
		if( $this->input->post('father') != '' ){
			$father = array(
							'id' => $pid,
							'fullname' => $this->input->post('father'),  	
							'gender' => 'male', 
							'residence' => $this->input->post('father_residence'), 
							);
			array_push($parents, $father);
		}	
		
		$this->parent_model->update($pid, $parents);	  
		
		redirect('profile/index/'.$pid);
	}
	
	public static function extractParent($parents, $var) {
		$flag = false;
		$p = null;
		foreach($parents as $parent) {
			if( $parent['gender'] == $var ) {
				$p = array(
						'fullname' => $parent['fullname'],
						'residence' => $parent['residence'],
					);
				$flag = true;
			}	
		}
		if(!$flag) {
			$p = array(
						'fullname' => '',
						'residence' => '',
					);
		}	
		return $p;
	}
	
	public static function extractGodparent($godparents, $n) {
		for( $i = 1; $i <= count($godparents); $i++ ) {
			if( $i === $n ) {
				return array(
							'fullname' => $godparents[$i-1]['fullname'],
							'residence' => $godparents[$i-1]['residence'],
							);
			}
		}
		return null;	
	}
	
}


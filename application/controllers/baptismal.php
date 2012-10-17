<?php


class Baptismal extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation'));
		
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array('baptismal_model', 'baptismal_godparent_model'));	
	}
	
	public function editBaptismal() {
		$person['edit'] = true;
		$person['id'] = $_POST['id'];
		$person['baptismal'] = $this->baptismal_model->get($_POST['id']);	
		
		$godparents = $this->baptismal_godparent_model->get($_POST['id']);
		$person['baptismal_godparent_1'] = $this->extractGodparent($godparents, 1); 
		$person['baptismal_godparent_2'] = $this->extractGodparent($godparents, 2);
		
		$html = $this->load->view('forms/baptismal_form', $person, true);
		echo json_encode( array('html' => $html) );
	}
	
	public function saveBaptismal() {
		
		$baptismal = array(
							'id' => $_POST['id'],
							'baptism_date' => $_POST['baptism_date'],
							'legitimacy' => $_POST['legitimacy'],
							'minister' => $_POST['minister'],
							'remarks' => $_POST['remarks'],
							'book_number' => $_POST['book_number'],
							'page_number' => $_POST['page_number'],
							'line_number' => $_POST['line_number'],
							);
							
		$godparent = array();
		
		if( $_POST['godparent_1'] != '' ) {
			$g1 = array(
						'id' => $_POST['id'],
						'fullname' => $_POST['godparent_1'],
						'residence' => $_POST['residence_1'],
					);
			array_push($godparent, $g1);
		}
		if( $_POST['godparent_2'] != '' ) {
			$g2 = array(
						'id' => $_POST['id'],
						'fullname' => $_POST['godparent_2'],
						'residence' => $_POST['residence_2'],
					);
			array_push($godparent, $g2);
		}
								
		
		if( $_POST['action'] == "add" )
			$this->baptismal_model->save($baptismal);
		else {
			$this->baptismal_model->update($baptismal, $_POST['id']);
			$this->baptismal_godparent_model->update($godparent, $_POST['id']);
		}
		
		
		$godparents = $this->baptismal_godparent_model->get($_POST['id']);
		$person['baptismal_godparent_1'] = $this->extractGodparent($godparents, 1); 
		$person['baptismal_godparent_2'] = $this->extractGodparent($godparents, 2);
		
		$person['id'] = $_POST['id'];
		$person['baptismal'] = $this->baptismal_model->get($_POST['id']);
		$baptismal = $this->load->view('records/baptismal', $person, true);
		
		echo json_encode( array( 'html' => $baptismal, 'action' => $_POST['action'] ) );
	}

	public function extractGodparent($godparents, $n) {
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
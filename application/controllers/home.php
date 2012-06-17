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
class Home extends MY_Controller {
	
	const NEW_FORM = 'NEW';
	const UPDATE_FORM = 'UPDATE';
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library( array('form_validation', 'pagination'));
		
		$this->load->helper( array('form', 'url'));  
		
		$this->load->model( array('priests_model', 'events_model'));	
	}
	
	/**
	 *  loads the home page
	 * 
	 */
    public function index() {
		$homedata = $this->getHomeData(); 
		$data['body'] = $this->load->view('home', $homedata, true);
		$data['title'] = 'Sto. Nino Homepage';
		$data['update'] = null;
		$this->load->view('template', $data);
    }
	
	private function getHomeData() {

		$config['base_url'] = base_url().'index.php/home/index';
		$config['total_rows'] = $this->priests_model->record_count();
		$config['per_page'] = 3;
		$config["uri_segment"] = 3;
		//$choice = $config["total_rows"] / $config["per_page"];
	    //$config["num_links"] = round($choice);
		
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$homedata["results"] = $this->priests_model->getPreviousPriests($config["per_page"], $page);
		$homedata["links"] = $this->pagination->create_links();
		$homedata["events"] = $this->events_model->getUpcomingEvents();
		
		return $homedata;
		
	}
	
	/**
	 *  add a priest
	 * 
	 */
	public function addpriest() {
	 	
		$config['upload_path'] = './assets/images/priests/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()) {
			if($_FILES['userfile']['name'] == "") {
				$this->priests_model->save($this->input->post('fullname'), $this->input->post('startdate'), $this->input->post('enddate'));
			}else
				echo $this->upload->display_errors();
				
		}
		else {
			$data = $this->upload->data();
			$file_id = $this->priests_model->save($this->input->post('fullname'), $this->input->post('startdate'), $this->input->post('enddate'), $data['file_name']);
			if($file_id) {
				list($name, $ext) = explode('.', $data['file_name']);
				rename("./assets/images/priests/".$data['file_name'], "./assets/images/priests/".$file_id.".".$ext);
				redirect('home');
	        }
			else
				echo "Database query error. Please contact your system developer.";
		}
		
	}
	
	/**
	 * 
	 * 
	 */
	 public function newPriest() {
		  $priest['type'] = self::NEW_FORM;
	  	  echo json_encode(array( 'html' => $this->load->view('forms/priest_add', $priest, true) ));
	  }
	
	/**
	 * 
	 * 
	 */
	 public function editPriest() {
	 	 $priest = $this->priests_model->getPriest( $_POST['id'] );
		 $priest['type'] = self::UPDATE_FORM;
	 	 echo json_encode( array('html' => $this->load->view('forms/priest_add', $priest, true)));
	 }
	 
	 /**
	  * 
	  * 
	  */
	  public function updatepriest() {
	  	
	  }
	 
	 /**
	  * 
	  * 
	  */
	  public function deletePriest($priestID) {
	  	  $this->priests_model->delete($priestID);
		  redirect('home');
	  }
    
}


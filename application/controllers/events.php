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
class Events extends MY_Controller {
	
	const NEW_FORM = 'NEW';
	const UPDATE_FORM = 'UPDATE';
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');  		
		$this->load->model('events_model');		
	}
    
	/**
	 * 	loads events page
	 * 
	 */
    public function index() {
        $this->load->library('form_validation');
		$data['body'] = $this->load->view('events', '', true);
		$data['title'] = 'Sto. Nino Events';
		$data['update'] = null;
		$this->load->view('template', $data);		
    }
	
	/**
	 *  display all events to the calendar
	 * 
	 */
	public function getEvents() {
		$events = $this->events_model->getAllEvents();
		echo json_encode($events);
	}
    
	/**
	 * 	create an event and save to the database
	 * 
	 */
	 public function createEvent() {
	 	$event = array( 'title' => $this->input->post('title'),
						'details' => $this->input->post('details'),
						'start_date' => $this->input->post('start_date'),
						'end_date' => $this->input->post('end_date'),	
						'created_by' => $this->session->userdata('username'),
						'created_on' => time(),					
					  );
	 	$this->events_model->save($event);
		redirect('events');
	 }

	/**
	 *  update an event
	 *  @param eventID
	 * 
	 */
	 public function updateEvent() {
	 	$event = array( 'title' => $this->input->post('title'),
						'details' => $this->input->post('details'),
						'start_date' => $this->input->post('start_date'),
						'end_date' => $this->input->post('end_date'),	
					  );
		$eventID = $this->input->post('eventID');
	 	$this->events_model->update($event, $eventID);
		redirect('events');
	 }
	 /**
	  *  get event
	  * @param eventID
	  * 
	  */
	  public function get() {
	  	  $this->load->library('form_validation');
		  $event = $this->events_model->getEvent( $_POST['id'] );
		  $event['type'] = self::UPDATE_FORM;
		  $isCreator = $this->session->userdata('username') == $event['created_by'];
		  if( !$isCreator )
		  	$isCreator =  $this->session->userdata('usertype') == 'admin';
		  echo json_encode( array('html' => $this->load->view('forms/event_add', $event, true), 
		  						  'isCreator' => $isCreator,
		  						  'creator' => $event['created_by'] 
						          ));
	  }
	  
	  public function newEvent() {
		  $loginstatus =  $this->session->userdata('is_logged_in');
	  	  $this->load->library('form_validation');
		  $event['type'] = self::NEW_FORM;
	  	  echo json_encode(array('html' => $this->load->view('forms/event_add', $event, true), 'isLoggedIn' => $loginstatus));
	  }
	  
	 /**
	  * 
	  * 
	  */
	  public function deleteEvent($eventID) {
	  	  echo $eventID;
		  $this->events_model->delete($eventID);
		  redirect('events');
	  }
}




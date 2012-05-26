<?php

/**
 * 
 *  Class that connects queries to/from stonino.events table
 * 
 *  @author Harvey Jake G. Opena
 *  @package model
 *  @subpackage events
 * 
 */

class Events_model extends CI_Model {
	
	private $tbl_event = 'events';
	private $tbl_pk = 'id';
	/**
	 *	retrieve all evets from database
	 *  @return array of events
	 */
	public function getAllEvents() {
		$query = "select * from ".$this->tbl_event;
		$results =  $this->db->query($query)->result_array();
		$events = array();
		foreach ($results as $result) {
			$event = array(
						'id' => 222,
						'eventID' => $result['id'],
						'title' => $result['title'],
						'start' => $result['start_date'],
						'end' => $result['end_date'],
					 );
		     array_push($events, $event);
		}
		return $events;
	}
	
	/**
	 *  save an event to the database
	 *  @param event 
	 *  
	 */
	 public function save($event) {
	 	 $this->db->insert($this->tbl_event, $event);
	 }
	 
	 /**
	  *  update event
	  * @param event, eventID
	  * 
	  */
	 public function update($event, $eventID) {
	 	$this->db->where($this->tbl_pk, $eventID);
		$this->db->update($this->tbl_event, $event);
	 }	  
	
	 /**
	  * get a specific event
	  * @param eventID
	  * 
	  */
	 public function getEvent($evenID) {
		$query = "select * from ".$this->tbl_event." where id = ".$evenID;
		$result = $this->db->query($query)->result_array();
		foreach ($result as $r) {
			$event = array(
						'eventID' => $r['id'],
						'title' => $r['title'],
						'details' => $r['details'],
						'start' => $r['start_date'],
						'end' => $r['end_date'],
						'created_by' => $r['created_by']
					);
		}
		return $event;
	 }	
	
}
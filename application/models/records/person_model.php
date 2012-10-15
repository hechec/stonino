<?php

/**
 * 
 *  Class that connects queries to/from stonino.person table
 * 
 *  @author Harvey Jake G. Opena
 *  @package model
 *  @subpackage records
 * 
 */

class Person_model extends CI_Model {
	
	private $tbl_person = 'person';
	private $tbl_pk = 'id';
	
	/**
	 *  save an event to the database
	 *  @param event 
	 *  
	 */
	public function save($person) {
		$this->db->insert($this->tbl_person, $person);
		return $this->db->insert_id();
	}
	
	public function update($pid, $person) {
		$this->db->where($this->tbl_pk, $pid);
		$this->db->update($this->tbl_person, $person);
	}
	
	public function get($pid) {
		$query = "select * from ".$this->tbl_person." where id = ".$pid;
		$result = $this->db->query($query)->result_array();	
		foreach ($result as $r) {
			return array(
				'id' => $r['id'],
				'firstname' => $r['firstname'],
				'middlename' => $r['middlename'],
				'lastname' => $r['lastname'],
				'extensionname' => $r['extensionname'],
				'birthday' => $r['birthday'],
				'birthplace' => $r['birthplace'],
				'gender' => $r['gender'],
				'civilstatus' => $r['civilstatus'],
				'residence' => $r['residence'],
			);
		}
	}
	 
	public function search($query) {
		$string = "SELECT * from person where CONCAT( firstname, ' ', lastname ) like '%".$query."%';";	
		$results =  $this->db->query($string)->result_array(); 			
		$persons = array();
		foreach ($results as $result) {
			$person = array(
						'id' => $result['id'],
						'firstname' => $result['firstname'],
						'middlename' => $result['middlename'],
						'lastname' => $result['lastname'],
						'extensionname' => $result['extensionname'],
					 );
		     array_push($persons, $person);
		}
		return $persons;		
	}
	
}
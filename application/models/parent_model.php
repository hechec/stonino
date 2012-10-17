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

class Parent_model extends CI_Model {
	
	private $tbl_parent = 'parent';
	private $tbl_pk = 'id';
	
	/**
	 *  save an event to the database
	 *  @param event 
	 *  
	 */
	public function save($parent) {
		$this->db->insert($this->tbl_parent, $parent);
		return $this->db->insert_id();
	}
	
	public function update($pid = null, $parents) {
		$this->db->where($this->tbl_pk, $pid);
		$this->db->delete($this->tbl_parent);
		foreach ($parents as $parent) {
			$this->db->insert($this->tbl_parent, $parent);
		}
	}
	
	public function getParents($pid) {
		$query = "select * from ".$this->tbl_parent." where id = ".$pid;
		$results =  $this->db->query($query)->result_array();
		$parents = array();
		foreach ($results as $result) {
			$parent = array(
						'fullname' => $result['fullname'],
						'gender' => $result['gender'],
						'residence' => $result['residence'],
					 );
		     array_push($parents, $parent);
		}
		return $parents;
	}
	
}
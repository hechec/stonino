<?php

/**
 * 
 *  Class that connects queries to/from stonino.baptismal table
 * 
 *  @author Harvey Jake G. Opena
 *  @package model
 *  @subpackage records
 * 
 */

class Baptismal_godparent_model extends CI_Model {
	
	private $tbl_baptismal_godparent = 'baptismal_godparent';
	private $tbl_pk = 'id';
	
	/**
	 *  save an event to the database
	 *  @param event 
	 *  
	 */
	public function save($godparent) {
		foreach ($godparent as $g) 
			$this->db->insert($this->tbl_baptismal_godparent, $g);
	}
	
	public function update($godparents, $id) {
		$this->db->where($this->tbl_pk, $id);
		$this->db->delete($this->tbl_baptismal_godparent);
		
		foreach ($godparents as $godparent) {
			$this->db->insert($this->tbl_baptismal_godparent, $godparent);
		}
	}
	
	public function get($id) {
		$query = "select * from ".$this->tbl_baptismal_godparent." where id = ".$id;
		$results = $this->db->query($query)->result_array();	
		$godparents = array();
		foreach ($results as $i => $result) {
			$godparent = array(
						'fullname' => $result['fullname'],
						'residence' => $result['residence'],
					 );
		     array_push($godparents, $godparent);
		}
		return $godparents;
	}

}
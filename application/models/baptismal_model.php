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

class Baptismal_model extends CI_Model {
	
	private $tbl_baptismal = 'baptismal';
	private $tbl_pk = 'id';
	
	/**
	 *  save an event to the database
	 *  @param event 
	 *  
	 */
	public function save($baptismal) {
		$this->db->insert($this->tbl_baptismal, $baptismal);
	}
	
	public function update($baptismal, $id) {
		 $this->db->where('id', $id);
         $this->db->update($this->tbl_baptismal, $baptismal);
	}
	
	public function get($pid) {
		$query = "select * from ".$this->tbl_baptismal." where id = ".$pid;
		$result = $this->db->query($query)->result_array();	
		foreach ($result as $r) {
			return array(
				'baptism_date' => $r['baptism_date'],
				'legitimacy' => $r['legitimacy'],
				'minister' => $r['minister'],
				'remarks' => $r['remarks'],
				'book_number' => $r['book_number'],
				'page_number' => $r['page_number'],
				'line_number' => $r['line_number'],
			);
		}
		return null;
	}
	
}
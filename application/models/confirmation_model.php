<?php

/**
 * 
 *  Class that connects queries to/from stonino.confirmation table
 * 
 *  @author Harvey Jake G. Opena
 *  @package model
 *  @subpackage records
 * 
 */

class Confirmation_model extends CI_Model {
	
	private $tbl_confirmation = 'confirmation';
	private $tbl_pk = 'id';
	
	/**
	 *  save to the database
	 *  @param confirmation 
	 *  
	 */
	public function save($confirmation) {
		$this->db->insert($this->tbl_confirmation, $confirmation);
	}
	
	public function get($id) {
		$query = "select * from ".$this->tbl_confirmation." where id = ".$id;
		$result = $this->db->query($query)->result_array();	
		foreach ($result as $r) {
			return array(
				'confirmation_date' => $r['confirmation_date'],
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
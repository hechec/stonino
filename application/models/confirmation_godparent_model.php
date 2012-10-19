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

class Confirmation_godparent_model extends CI_Model {
	
	private $tbl_confirmation_godparent = 'confirmation_godparent';
	private $tbl_pk = 'id';
	
	/**
	 *  save an event to the database
	 *  @param event 
	 *  
	 */
	public function save($godparent) {
		$this->db->insert($this->tbl_confirmation_godparent, $godparent);
	}
	
}
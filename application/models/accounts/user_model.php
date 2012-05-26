<?php

/**
 * 
 *  Class that connects queries to/from stonino.user table
 * 
 *  @author Harvey Jake G. Opena
 *  @package model
 *  @subpackage accounts
 * 
 */

class User_model extends CI_Model {
	
	const ADMIN = 'admin';
	const SECRETARY = 'secretary';
	
	/**
	 *  validate user log in
	 *  @return boolean value authentication
	 * 
	 */
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', ($this->input->post('password')));
		$this->db->from('user');
		$query = $this->db->get();
		
		if($query->num_rows == 1)
			return true;
		return false;
	}
	
	
	/**
	 * determine user type if login is valid
	 * @return const usertype
	 *  
	 */
	public function getUserType() {
		$query = "select user_type from user where username = '".$this->input->post('username')."'";
		$resultset = $this->db->query($query)->result_array();
		foreach ($resultset as $key => $result) {
			if( $result['user_type'] === 'admin' )
				return self::ADMIN;
			return self::SECRETARY;
		}
		return null;
	}
	
}
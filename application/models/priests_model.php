<?php

/**
 * 
 *  Class that connects queries to/from stonino.priests table
 * 
 *  @author Harvey Jake G. Opena
 *  @package model
 *  @subpackage events
 * 
 */

class Priests_model extends CI_Model {
	
	private $tbl_priest = 'priests';
	private $tbl_pk = 'id';
	
	/**
	 *  save a priest to the database
	 *  @param event 
	 *  
	 */
	 public function save($fullname, $startdate, $enddate, $filename = null) {
	 	$priest = array('fullname' => $fullname,
						'start_date' => $startdate,
						'end_date' => $enddate,	
						'photo_filename' => is_null($filename) ? '' : $filename, 
					  );
	 	 $this->db->insert('priests', $priest);
		 
		 if( !is_null($filename) ) {
			 $id = $this->db->insert_id();
			 list($name, $ext) = explode('.', $filename);
			 $this->db->set('photo_filename', $this->db->insert_id().".".$ext);
			 $this->db->where('id', $this->db->insert_id());
			 $this->db->update('priests'); 
			 return $id;
		 }
		 
	 }
	 
	 /**
	  *  get all priests
	  * 
	  */	
	  public function getPreviousPriests($limit, $start) {
	  	 $this->db->limit($limit, $start);
	     $query = $this->db->get('priests');
		 $data = array();
    	 foreach ($query->result() as $row) 
            $data[] = $row;
	    return $data;	  	
	  }
	  
	  /**
	   * 
	   * 
	   */
	  public function record_count() {
	  	  $query = "select * from ".$this->tbl_priest;		  
	      return count($this->db->query($query)->result_array());
	  }
	  
	  /**
	   * 
	   * 
	   */
	  public function getPriest($priestID) {
	  	  $query = "select * from ".$this->tbl_priest." where id = ".$priestID;
		  $arr = $this->db->query($query)->result_array();	
		  foreach($arr as $r) 
			  return array(
			  	'id' => $r['id'],
			  	'fullname' => $r['fullname'],
			  	'startdate' => $r['start_date'],
			  	'enddate' => $r['end_date'],
			  	'photo' => $r['photo_filename']
			  );
	  }	

	  /**
	   * 
	   * 
	   */
	   public function delete($priestID) {
	   	    $query = "delete from ".$this->tbl_priest." where id = ".$priestID;
		    $this->db->query($query);
	   }
}



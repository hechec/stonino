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
class Home extends MY_Controller {

	/**
	 *  loads the home page
	 * 
	 */
    public function index() {
        $this->load->helper('url');
        $this->load->library('form_validation');
		$data['body'] = $this->load->view('home', '', true);
		$data['title'] = 'Sto. Nino Homepage';
		$this->load->view('template', $data);
    }
    
}


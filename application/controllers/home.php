<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author user
 */
class Home extends CI_Controller {

    
    public function index() {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $data = array('title' => 'Welcome to CI Homepage');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
    
}


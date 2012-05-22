<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Events extends CI_Controller {
    
    public function index() {
        $this->load->helper('url');
        $data = array('title' => 'Sto. Nino - Events');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('events/index');
        $this->load->view('templates/footer');
    }
    
}

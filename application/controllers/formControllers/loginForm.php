<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginForm extends CI_Controller {
    
    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $config = array(
               array(
                     'field'   => 'username', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'required'
                  )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $data = array('title' => 'Welcome to CI Homepage');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('home');
            $this->load->view('templates/footer');
        }
        else {
                $this->load->view('formsuccess');
        }
    }
    
}
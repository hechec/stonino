<?php


class MY_Controller extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();

        //Get the status which is array
        $login_status = $this->check_session();

        //Send it to the views, it will be available everywhere

        //The "load" refers to the CI_Loader library and vars is the method from that library.
        //This means that $login_status which you previously set will be available in your views as $loginstatus since the array key below is called loginstatus.
        $this->load->vars(array('loginstatus' => $login_status));
    }

    protected function check_session()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true) 
			return false;
		return true;
    }
		
}

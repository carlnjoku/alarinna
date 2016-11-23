<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
                
        parent::__construct();
        
        if($this->session->userdata('logged_in') == FALSE)
        {
            redirect('setup/login');
        }
        else
        {
        
        }
            
                
    }
        
	public function dashboard()
	{
		$memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'dashboard';
        $data['memberID'] = $memberID;
		$this->load->view('includes/template', $data); 
	}

	

    public function setup()
	{
		$this->load-view('multistep/multistep');
	}
}

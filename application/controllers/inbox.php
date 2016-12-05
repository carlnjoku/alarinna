<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

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
        
	public function message()
	{
		$memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'message';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Messages';
        $data['page_title'] = 'My Page | Messages';
		$this->load->view('includes/template', $data); 
	}

	

    public function setup()
	{
		$this->load-view('multistep/multistep');
	}
}

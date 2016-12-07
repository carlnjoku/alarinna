<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
        
	public function matches()
	{
		$memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'matches';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Matches';
        $data['page_title'] = 'My Matches';
		$this->load->view('includes/template', $data); 
	}

    public function fancies()
    {
        $memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'fancies';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Fancies';
        $data['page_title'] = 'Fancies';
		$this->load->view('includes/template', $data); 
    }

    public function requests_old()
    {
        $memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'request';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Requests';
        $data['page_title'] = 'Requests';
		$this->load->view('includes/template', $data); 
    }

    public function requests()
    {
        $memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'request';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Requests';
        $data['page_title'] = 'Requests';
		$this->load->view('includes/template', $data); 
    }

    public function search()
    {
        $memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'search';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Search Result';
        $data['page_title'] = 'Find A Match';
		$this->load->view('includes/template', $data); 
    }

    public function visitors()
    {
        $memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'visitors';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Visitors';
        $data['page_title'] = 'Visitors';
		$this->load->view('includes/template', $data); 
    }


	

    public function setup()
	{
		$this->load-view('multistep/multistep');
	}
}
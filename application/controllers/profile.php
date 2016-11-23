<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
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
	

	
	public function setup()
	{
		$this->load-view('multistep/multistep');
	}


	public function edit_profile()
	{
		$memberID = $this->session->userdata('memberID');	

		// Get Photos
        $handle_photos = curl_init();
		curl_setopt_array(
		$handle_photos,
			array(
				CURLOPT_URL => "http://localhost/neo4j-alarinna/web/getphotos/$memberID",
				CURLOPT_POST => false,
				CURLOPT_RETURNTRANSFER => true
			)
			
		);
	
		$response_photos = curl_exec($handle_photos);
		$result_photos = json_decode($response_photos, true);


		// Get Photos
        $handle_member = curl_init();
		curl_setopt_array(
		$handle_member,
			array(
				CURLOPT_URL => "http://localhost/neo4j-alarinna/web/getmember/$memberID",
				CURLOPT_POST => false,
				CURLOPT_RETURNTRANSFER => true
			)
			
		);
	
		$response_member = curl_exec($handle_member);
		$result_member = json_decode($response_member, true);
	
		
        
        $data['main_content'] = 'edit_profile';
        $data['memberID'] = $memberID;
		$data['result_photos'] = $result_photos;
		$data['result_member'] = $result_member;
		$data['page_title'] = 'Edit Profile';
		$this->load->view('includes/template', $data);
	}

	public function ajax_photos()
	{
		$memberID = $this->session->userdata('memberID');	

		// Get Eyes
        $handle_photos = curl_init();
		curl_setopt_array(
		$handle_photos,
			array(
				CURLOPT_URL => "http://localhost/neo4j-alarinna/web/getphotos/$memberID",
				CURLOPT_POST => false,
				CURLOPT_RETURNTRANSFER => true
			)
			
		);
	
		$response_photos = curl_exec($handle_photos);
		$result_photos = json_decode($response_photos, true);
		$data['memberID']= $memberID;
		$data['result_photos'] = $result_photos;
		$this->load->view('partials/ajax_photos', $data);
		
		                                                                                
                                                                                      
	}

	function slim()
	{
		$this->load->view('test_slim');
	}

	function image_uploader()
	{
		$this->load->view('image_uploader');
		
	}

	function image_viewer()
	{
		$this->load->view('image_viewer');
	}

	function switchm(){
		
		$data['main_content'] = 'switch';
		$this->load->view('includes/template', $data);
	}

	
        


	
}

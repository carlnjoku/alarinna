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
        
        $data['main_content'] = 'search';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Search Result';
        $data['page_title'] = 'Find A Match';
        $data['result_member'] = $result_member;
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

    function delete_photo()
    {
        $poto_id = $_POST['photo_id'];
        unlink(FCPATH."profile-images/".$poto_id);

		$handle_member = curl_init();
		curl_setopt_array(
		$handle_member,
			array(
				CURLOPT_URL => "http://localhost/neo4j-alarinna/web/delete_photo/$poto_id",
				CURLOPT_POST => false,
				CURLOPT_RETURNTRANSFER => true
			)
			
		);
	
		echo $response_member = curl_exec($handle_member);
		$result_member = json_decode($response_member, true);
    
    }

    function slider()
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

        
        


        foreach($result_photos as $key=>$val){
            
            $memberID = $val['memberID'];
            $photo = $val['photo'];

            $array[] = array(
                'image'=>'../profile-images/'.$photo,
                'link_url'=> '../profile-images/'.$photo,
                'link_rel'=>'prettyPhoto'
                );
            
        }
        
        $photos = json_encode($array, true);

       
        
       
        $data['memberID'] = $memberID;
		$data['title'] = 'Alarinna | Profile View';
		$data['result_photos'] = $result_photos;
        $data['photos']= $photos;
        $this->load->view('slider', $data);
    }

    public function tooltip()
    {
        $memberID = $this->session->userdata('memberID');	
        
        $data['main_content'] = 'tooltip';
        $data['memberID'] = $memberID;
        $data['title'] = 'Alarinna | My Visitors';
        $data['page_title'] = 'Tooltip';
		$this->load->view('includes/template', $data); 
    }

    
}

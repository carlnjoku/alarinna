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

    function geo()
	{
		$geo = 'http://maps.google.com/maps/api/geocode/xml?latlng='.htmlentities(htmlspecialchars(strip_tags($_GET['latlng']))).'&sensor=true';
			
			$xml = simplexml_load_file($geo);

			foreach($xml->result->address_component as $component){
				if($component->type=='street_address'){
					$geodata['precise_address'] = $component->long_name;
				}
				if($component->type=='natural_feature'){
					$geodata['natural_feature'] = $component->long_name;
				}
				if($component->type=='airport'){
					$geodata['airport'] = $component->long_name;
				}
				if($component->type=='park'){
					$geodata['park'] = $component->long_name;
				}
				if($component->type=='point_of_interest'){
					$geodata['point_of_interest'] = $component->long_name;
				}
				if($component->type=='premise'){
					$geodata['named_location'] = $component->long_name;
				}
				if($component->type=='street_number'){
					$geodata['house_number'] = $component->long_name;
				}
				if($component->type=='route'){
					$geodata['street'] = $component->long_name;
				}
				if($component->type=='locality'){
					$geodata['town_city'] = $component->long_name;
				}
				if($component->type=='administrative_area_level_3'){
					$geodata['district_region'] = $component->long_name;
				}
				if($component->type=='neighborhood'){
					$geodata['neighborhood'] = $component->long_name;
				}
				if($component->type=='colloquial_area'){
					$geodata['locally_known_as'] = $component->long_name;
				}
				if($component->type=='administrative_area_level_2'){
					$geodata['county_state'] = $component->long_name;
				}
				if($component->type=='postal_code'){
					$geodata['postcode'] = $component->long_name;
				}
				if($component->type=='country'){
					$geodata['country'] = $component->long_name;
				}
			}

			list($lat,$long) = explode(',',htmlentities(htmlspecialchars(strip_tags($_GET['latlng']))));
			$geodata['latitude'] = $lat;
			$geodata['longitude'] = $long;
			$geodata['formatted_address'] = $xml->result->formatted_address;
			$geodata['accuracy'] = htmlentities(htmlspecialchars(strip_tags($_GET['accuracy'])));
			$geodata['altitude'] = htmlentities(htmlspecialchars(strip_tags($_GET['altitude'])));
			$geodata['altitude_accuracy'] = htmlentities(htmlspecialchars(strip_tags($_GET['altitude_accuracy'])));
			$geodata['directional_heading'] = htmlentities(htmlspecialchars(strip_tags($_GET['heading'])));
			$geodata['speed'] = htmlentities(htmlspecialchars(strip_tags($_GET['speed'])));
			$geodata['google_api_src'] = $geo;
			echo '<img src="http://maps.google.com/maps/api/staticmap?center='.$lat.','.$long.'&zoom=14&size=150x150&maptype=roadmap&&sensor=true" width="150" height="150" alt="'.$geodata['formatted_address'].'" \/><br /><br />';
			echo 'Latitude: '.$lat.' Longitude: '.$long.'<br />';
			foreach($geodata as $name => $value){
				echo ''.$name.': '.str_replace('&','&amp;',$value).'<br />';
			}
	}
}

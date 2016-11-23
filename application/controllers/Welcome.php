<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	function test()
	{
		$data['main_content'] = 'company/dev1-company-page';
		$this->load->view('includes/template', $data); 
	}

	public function setup()
	{
		$this->load-view('multistep/multistep');
	}
}

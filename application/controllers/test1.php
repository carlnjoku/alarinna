<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test1 extends CI_Controller {

	
	

	public function test()
	{
		$this->load->view('test');
	}
}
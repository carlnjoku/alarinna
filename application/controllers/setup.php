<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

	
    
    public function profile()
	{
       /*
       //require_once(APPPATH."third_party/server/async.php");
        // Get hair
        $handle_hair = curl_init();
		curl_setopt_array(
		$handle_hair,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/hair",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_hair = curl_exec($handle_hair);
		$result_hair = json_decode($response_hair, true);

        $fp = fopen('hair.json', 'w');
        fwrite($fp, json_encode($result_hair));
        fclose($fp);

         // Get Height
        $handle_height = curl_init();
		curl_setopt_array(
		$handle_height,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/height",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_height = curl_exec($handle_height);
		$result_height = json_decode($response_height, true);

        // Get Eyes
        $handle_eyes = curl_init();
		curl_setopt_array(
		$handle_eyes,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/eyes",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_eyes = curl_exec($handle_eyes);
		$result_eyes = json_decode($response_eyes, true);

        // Get Religion
        $handle_religion = curl_init();
		curl_setopt_array(
		$handle_religion,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/religion",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_religion = curl_exec($handle_religion);
		$result_religion = json_decode($response_religion, true);

        // Get Profession
        $handle_profession = curl_init();
		curl_setopt_array(
		$handle_profession,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/profession",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_profession = curl_exec($handle_profession);
		$result_profession = json_decode($response_profession, true);

        // Get Body Type
        $handle_bodytype = curl_init();
		curl_setopt_array(
		$handle_bodytype,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/bodytype",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_bodytype = curl_exec($handle_bodytype);
		$result_bodytype = json_decode($response_bodytype, true);

        // Get Looking for
        $handle_looking_for = curl_init();
		curl_setopt_array(
		$handle_looking_for,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/looking_for",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_looking_for = curl_exec($handle_looking_for);
		$result_looking_for = json_decode($response_looking_for, true);

        // Get Ethnicity
        $handle_ethnicity = curl_init();
		curl_setopt_array(
		$handle_ethnicity,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/ethnicity",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
    
		$response_ethnicity = curl_exec($handle_ethnicity);
		$result_ethnicity = json_decode($response_ethnicity, true);

        // Get Marital Status
        $handle_marital_status = curl_init();
		curl_setopt_array(
		$handle_marital_status,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/marital_status",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_marital_status = curl_exec($handle_marital_status);
		$result_marital_status = json_decode($response_marital_status, true);

        // Get Children
        $handle_children = curl_init();
		curl_setopt_array(
		$handle_children,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/children",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_children = curl_exec($handle_children);
		$result_children = json_decode($response_children, true);

        // Get Income
        $handle_income = curl_init();
		curl_setopt_array(
		$handle_income,
            array(
                CURLOPT_URL => "http://localhost/neo4j-alarinna/web/income",
                CURLOPT_POST => false,
                CURLOPT_RETURNTRANSFER => true
            )
		);
	
		$response_income = curl_exec($handle_income);
		$result_income = json_decode($response_income, true);
        
       
        $data['result_height'] = $result_height;
        $data['result_hair'] = $result_hair;
        $data['result_eyes'] = $result_eyes;
        $data['result_religion'] = $result_religion;
        $data['result_profession'] = $result_profession;
        $data['result_bodytype'] = $result_bodytype;
        $data['result_ethnicity'] = $result_ethnicity;
        $data['result_looking_for'] = $result_looking_for;
        $data['result_marital_status']= $result_marital_status;
        $data['result_children'] =$result_children;
        $data['result_income'] =$result_income;
        */

        $this->load->view('multistep/multistep_new');
	}


    public function confirm()
    {
        
        $data['title'] = 'Confirmation successful';
        $this->load->view('multistep/confirm1', $data);
    }

    public function login()
    {
        
        $data['title'] = 'Confirmation successful';
        $this->load->view('multistep/login_on_confirm', $data);
    }

    public function auth()
    {
        $memberID = $this->uri->segment(3);
        // set session user data
            $session_data = array(
                'memberID' =>$memberID,
                'logged_in' => 1
            );
            
           $this->session->set_userdata($session_data);
           redirect("home/dashboard");
           
    }

    

}



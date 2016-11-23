<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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


    function hair()
    {
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

    }

    function height()
    {
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
            
            $fp = fopen('height.json', 'w');
            fwrite($fp, json_encode($result_height));
            fclose($fp);
    }

    function eyes()
    {
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

            $fp = fopen('eyes.json', 'w');
            fwrite($fp, json_encode($result_eyes));
            fclose($fp);
    }

    function religion()
    {
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

        $fp = fopen('religion.json', 'w');
        fwrite($fp, json_encode($result_religion));
        fclose($fp);
    }

    function profession()
    {
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

        $fp = fopen('profession.json', 'w');
        fwrite($fp, json_encode($result_profession));
        fclose($fp);
    }
        
    function bodytype()
    {
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

        $fp = fopen('bodytpe.json', 'w');
        fwrite($fp, json_encode($result_bodytype));
        fclose($fp);
    }
        
    function lookingfor()
    {
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

        $fp = fopen('lookingfor.json', 'w');
        fwrite($fp, json_encode($result_looking_for));
        fclose($fp);
    }
        

    function ethnicity()
    {
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

        $fp = fopen('ethnicity.json', 'w');
        fwrite($fp, json_encode($result_ethnicity));
        fclose($fp);
    }
        
    function marital_status()
    {
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

        $fp = fopen('marital_status.json', 'w');
        fwrite($fp, json_encode($result_marital_status));
        fclose($fp);
    }
        
    function children()
    {
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

        $fp = fopen('children.json', 'w');
        fwrite($fp, json_encode($result_children));
        fclose($fp);
    }
    
        
    function income()
    {
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

        $fp = fopen('income.json', 'w');
        fwrite($fp, json_encode($result_income));
        fclose($fp);
    }

    
    

}
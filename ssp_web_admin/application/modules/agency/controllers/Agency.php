<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agency extends MX_Controller {
	
        function __construct() 
        {
           parent::__construct();

              $this->load->library('Format');
           
            $this->load->helper(array('url','captcha','form'));
            $this->load->library(array('session'));               
			//$this->load->model('Admin_model');            
			   
        }
		
		
	
    public function dashboard()
	{				
		if(!$this->session->userdata('userlogin')){redirect("admin/logout");}
		//echo "Hii".$this->session->userdata('userlogin').$this->session->userdata('reg_name');die;

		//$this->load->view('../../__inc/header', $data);
		$this->load->view('dashboard',$data);
	}
        
        
}

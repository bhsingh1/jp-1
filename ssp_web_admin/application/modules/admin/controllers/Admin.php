<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
	
        function __construct() 
        {
           parent::__construct();

              $this->load->library('Format');
           
            $this->load->helper(array('url','captcha','security','form'));
            $this->load->library(array('session','security','form_validation','pagination'));               
			//$this->load->model('Admin_model');            
			   
        }
		
		function checkcaptch($captcha_code)
		{
		   $session_captcha = $this->session->userdata('session_captcha');
		   
			 if ($captcha_code == $session_captcha)
			{
				$this->form_validation->set_message('checkemail', 'The %s field can not be the word "email"');
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
		
		public function change_captcha()
		{
			if($this->input->is_ajax_request()){ echo $this->create_captch();}
		}
		
		private function create_captch()
		{
			  $vals = array(
						'word'          => rand(4,999999),
						'img_path'      => './captcha/',
						'img_url'       => base_url().'captcha/', 
						'word_length'   => 4,
						'font_size'     => 50,
						'colors'        => array(
											'background' => array(255, 255, 255),
											'border' => array(255, 255, 255),
											'text' => array(153,0,0),
											'grid' => array(192, 192, 192)
											)
						      
					 );
					 
				$captcha = create_captcha($vals);
				
				//print_r($captcha);die;
				
				$this->session->set_userdata('session_captcha', $captcha['word']);
				//return $captcha['image'];
				return $captcha['filename'];		
		}
		
		public function index()
        {					
			
			if($this->input->post())
			{
				 $this->form_validation->set_rules('name', 'Name', 'required');				 
				 $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[20]|alpha_dash');
                 $this->form_validation->set_rules('password', 'Password', 'required');
				 $this->form_validation->set_rules('captcha_code', 'Captcha', 'required');                
				
				if ($this->form_validation->run($this) == FALSE)
                {       
						$data['captcha_image'] = $this->create_captch();
                        $this->load->view("signup_form",$data);
                }
                else
                {
					$username =  $this->input->post("username");
				    $password =  base64_encode($this->input->post("password"));
					$name =      $this->input->post('name');
				
					$session_captcha = $this->session->userdata('session_captcha');                
                    $interedcaptchacode = $this->input->post('captcha_code');					
					
					if($session_captcha==$interedcaptchacode)					
					{			
				
							$header = array();                
							$header[] = 'Content-type: application/xml';
							//$header[] = 'Authorization: Basic '.$basicauth;
							
							$apiurl = "http://10.246.61.68/development/microapi/general/signup"; 
							$post_data = '<xml><username>'.$username.'</username><password>'.$password.'</password><name>'.$name.'</name></xml>';
							

							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, $apiurl);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
							curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 30);
							$result = curl_exec($ch);
							$curl_errno = curl_errno($ch);
							$curl_error = curl_error($ch);
							curl_close($ch);
							
							//echo $result;die;
							
								if($curl_errno > 0) 
								{
									$data['error_msg'] = "Server error please try later ercode:2001";
								}
								elseif(!$result)
								{
								    $data['error_msg'] = "Server error please try later ercode:2002";
								}
								else{
									    $xml = new SimpleXMLElement($result);
										//echo $xml->status;die;
									    if(trim($xml->status)=='success')
										{	
											$data['suc'] = "suc";										  
										}
										elseif(trim($xml->message)=='exist')
										{
											$data['error_msg'] = "Username already exist";
										}
								    }
							 
						 //}	
						 //else{							  
							  //$data['error_msg'] = "Username already exist";							  
							 //}
					}
					else
					    {
							$data['error_msg'] = "Invalid Captcha code"; 
					    } 
						
					$data['captcha_image'] = $this->create_captch();
					$this->load->view('signup_form',$data);
                }
				
				
			}
			else{    
			       $data['captcha_image'] = $this->create_captch();			
				   $this->load->view('signup_form',$data);
			    }
        }
		
		public function sdetails()
		{
			echo "Hii".$this->session->userdata('reg_name').$this->session->userdata('session_captcha');die;
		}
     
		function createsession($username,$id,$name)
		{
			//echo "$username $id $name";die;
		  $this->session->set_userdata('userlogin',$username); 
		  $this->session->set_userdata('user_id',$id);
		  $this->session->set_userdata('reg_name',$name);
		  
		 
		  //echo $this->session->userdata('reg_name');
		  
		   redirect("agency/dashboard");
		}
        public function login()
        {
			
		    if($this->session->userdata("userlogin"))
			{
				redirect("agency/dashboard");		  
			}	            
							
			
			if($this->input->post())
			{
				 $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[20]|alpha_dash');
                 $this->form_validation->set_rules('password', 'Password', 'required');
				 $this->form_validation->set_rules('captcha_code', 'Captcha', 'required');                
				
				if ($this->form_validation->run($this) == FALSE)
                {       
						$data['captcha_image'] = $this->create_captch();
                        $this->load->view("login_form",$data);
                }
                else
                {
					$username =  $this->input->post("username");
				    $password =  base64_encode($this->input->post("password"));
				
					$session_captcha = $this->session->userdata('session_captcha');                
                    $interedcaptchacode = $this->input->post('captcha_code');					
					
					if($session_captcha==$interedcaptchacode)					
					{					
					
							$header = array();                
							$header[] = 'Content-type: application/xml';
							//$header[] = 'Authorization: Basic '.$basicauth;
							
							$apiurl = "http://10.246.61.68/development/microapi/general/validate_login"; 
							$post_data = '<xml><username>'.$username.'</username><password>'.$password.'</password></xml>';
							

							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, $apiurl);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
							curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 30);
							$result = curl_exec($ch);
							$curl_errno = curl_errno($ch);
							$curl_error = curl_error($ch);
							curl_close($ch);
							
							//echo $result;die;
							
								if($curl_errno > 0) 
								{
									$data['error_msg'] = "Server error please try later ercode:2001";
								}
								elseif(!$result)
								{
								    $data['error_msg'] = "Server error please try later ercode:2002";
								}
								else{
									    $xml = new SimpleXMLElement($result);
										//echo $xml->status;die;
									    if(trim($xml->status)=='success')
										{
											$this->createsession($username,(string)$xml->id,(string)$xml->name);
										  
										}
										else{$data['error_msg'] = "Invalid Username/Password";}
								    }						
							
							
					}else
					    {
							$data['error_msg'] = "Invalid Captcha code"; 
					    } 
						
					$data['captcha_image'] = $this->create_captch();
					$this->load->view('login_form',$data);
                }
				
				
			}
			else{    
			       $data['captcha_image'] = $this->create_captch();			
				   $this->load->view('login_form',$data);
			    }
        }
		
	
    public function dashboard()
	{				
		//if(!$this->session->userdata('userlogin')){redirect("admin/logout");}
		echo $this->session->userdata('userlogin').$this->session->userdata('reg_name');die;

		//$this->load->view('../../__inc/header', $data);
		$this->load->view('dashboard',$data);
	}

    private function aec_decrypt($password)
	{
		$ps = NULL;
		if($password){
		$fs = explode('&',$password);
				$encrypted = base64_decode($fs[1]); // data_base64 from JS
				$iv        = base64_decode($fs[2]);   // iv_base64 from JS
				$key       = base64_decode($fs[3]);
		
				$opass1 = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_128, $key, $encrypted, MCRYPT_MODE_CBC, $iv ), "\t\0 " );
				$ps = $this->security->xss_clean($opass1);
				}
		return $ps;
	}

	
//########################################	
	
	public function logout()
	{
		$this->session->unset_userdata('userlogin');
		$this->session->unset_userdata('reg_name');
		$this->session->unset_userdata('id');
		
		redirect("admin/login");
	}
     
        
        
}
